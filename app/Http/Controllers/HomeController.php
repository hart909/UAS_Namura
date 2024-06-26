<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Food;
use App\Models\Packet;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Payment;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $isSearch = false;
        if (Auth::id()) {
            if ($request->search) {
                return redirect()->route("redirects", [
                    "search" => $request->search,
                ]);
            } elseif ($request->min && $request->max) {
                return redirect()->route("redirects", [
                    "min" => $request->min,
                    "max" => $request->max,
                ]);
            } elseif ($request->sort) {
                return redirect()->route("redirects", [
                    "sort" => $request->sort,
                ]);
            } else {
                return redirect()->route("redirects");
            }
        }

        if ($request->search) {
            $data = food::where(
                "title",
                "Like",
                "%" . $request->search . "%"
            )->get();
            $isSearch = true;
        } elseif ($request->min && $request->max) {
            $data = food::whereBetween("price", [
                $request->min,
                $request->max,
            ])->get();
            $isSearch = true;
        } elseif ($request->sort) {
            $data = food::orderBy("title", $request->sort)->get();
            $isSearch = true;
        } else {
            $data = food::all();
        }
        $data2 = packet::all();
        return view("home", compact("data", "data2", "isSearch"));
    }

    public function redirects(Request $request)
    {
        $isSearch = false;
        if ($request->search) {
            $data = food::where(
                "title",
                "Like",
                "%" . $request->search . "%"
            )->get();
            $isSearch = true;
        } elseif ($request->min && $request->max) {
            $data = food::whereBetween("price", [
                $request->min,
                $request->max,
            ])->get();
            $isSearch = true;
        } elseif ($request->sort) {
            $data = food::orderBy("title", $request->sort)->get();
            $isSearch = true;
        } else {
            $data = food::all();
        }
        $data2 = packet::all();
        $usertype = Auth::user()->usertype;

        if ($usertype == "1") {
            return view("admin.adminhome");
        } else {
            $user_id = Auth::id();
            $count = cart::where("user_id", $user_id)->count();
            return view("home", compact("data", "data2", "count", "isSearch"));
        }
    }

    public function addcart(Request $request, $id)
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $foodid = $id;
            $quantity = $request->quantity;

            $cart = new cart();
            $cart->user_id = $user_id;
            $cart->food_id = $foodid;
            $cart->quantity = $quantity;
            $cart->save();

            return redirect()->back();
        } else {
            return redirect("/login");
        }
    }
    public function showcart(Request $request, $id)
    {
        $count = cart::where("user_id", $id)->count();
        if (Auth::id() == $id) {
            $data2 = cart::select("*")
                ->where("user_id", "=", $id)
                ->get();
            $data = cart::where("user_id", $id)
                ->join("food", "carts.food_id", "=", "food.id")
                ->get();
            return view("showcart", compact("count", "data", "data2"));
        } else {
            return redirect()->back();
        }
    }
    public function remove($id)
    {
        $data = cart::find($id);
        $data->delete();

        return redirect()->back();
    }
    public function orderconfirm(Request $request)
    {
        $file = $request->file("file");
        $fileName = time() . "_" . $file->getClientOriginalName();
        // $filePath = $file->storeAs("uploads", $fileName, "public");
        $destinationPath = public_path("payment");
        $file->move($destinationPath, $fileName);
        $filePath = $fileName;
        $payment = new Payment();
        $payment->image = $filePath;
        $payment->created_by = Auth::id();
        $payment->save();

        foreach ($request->foodname as $key => $foodname) {
            $data = new order();
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->payment_id = $payment->id;

            $data->save();
        }

        return redirect()->back();
    }

    public function bestseller($tags)
    {
        $foods = Food::where("tags", $tags)->get(); // Mengambil semua data makanan dengan tag yang sesuai
        return view("bestseller", compact("foods"));
    }
    public function signature($tags)
    {
        $foods = Food::where("tags", $tags)->get(); // Mengambil semua data makanan dengan tag yang sesuai
        return view("signature", compact("foods"));
    }
    public function oriental($tags)
    {
        $foods = Food::where("tags", $tags)->get(); // Mengambil semua data makanan dengan tag yang sesuai
        return view("oriental", compact("foods"));
    }

    public function history(Request $request, $id)
    {
        $count = cart::where("user_id", $id)->count();
        if (Auth::id() == $id) {
            $data = Payment::with("order")
                ->where("created_by", $id)
                ->get();
            foreach ($data as $value) {
                $value->name = $value->order[0]->name;
                $value->status =
                    $value->status === null
                        ? "No Status"
                        : ($value->status == 1
                            ? "Approved"
                            : "Declined");
                $value->orderList = "";
                $value->total = 0;
                foreach ($value->order as $i => $value2) {
                    $value->orderList =
                        $i == 0
                            ? $value2->foodname . " (" . $value2->quantity . ")"
                            : $value->orderList .
                                ", " .
                                $value2->foodname .
                                " (" .
                                $value2->quantity .
                                ")";
                    $value->total =
                        $value->total + $value2->quantity * $value2->price;
                }
            }
            return view("history", compact("count", "data"));
        } else {
            return redirect()->back();
        }
    }
}
