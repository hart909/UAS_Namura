<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Models\Food;
use App\Models\Reservation;
use App\Models\Packet;
use App\Models\Order;
use App\Models\Payment;
use App\Events\PaymentApprovalEvent;
use App\Events\ReservationEvent;
use App\Models\Testimonial;
use App\Models\Contact;
use Notification;
use App\Notifications\SendEmailNotification;

class AdminController extends Controller
{
    public function user(Request $request, $order = null, $sort = null)
    {
        if ($sort && $order) {
            $data = user::orderBy($order, $sort)->get();
        } elseif (
            ($request->role == 1 || $request->role == 0) &&
            $request->role != 2 &&
            $request->role != null
        ) {
            $data = user::where("usertype", $request->role)->get();
        } else {
            $data = user::where("name", "Like", "%" . $request->search . "%")
                ->orWhere("email", "Like", "%" . $request->search . "%")
                ->get();
        }
        $role = [
            [
                "id" => 0,
                "name" => "User",
            ],
            [
                "id" => 1,
                "name" => "Admin",
            ],
        ];
        return view("admin.users", compact(["data", "role"]));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu(Request $request, $order = null, $sort = null)
    {
        if ($sort && $order) {
            $data = food::orderBy($order, $sort)->get();
        } elseif ($request->tags) {
            $data = food::where("tags", $request->tags)->get();
        } else {
            $data = food::where("title", "Like", "%" . $request->search . "%")
                ->orWhere("description", "Like", "%" . $request->search . "%")
                ->orWhere("price", "Like", "%" . $request->search . "%")
                ->orWhere("tags", "Like", "%" . $request->search . "%")
                ->get();
        }
        $tags = food::select("tags")->get();
        $tags = $tags->unique("tags")->values();
        return view("admin.foodmenu", compact(["data", "tags"]));
    }

    public function updateview($id)
    {
        $data = food::find($id);
        return view("admin.updateview", compact("data"));
    }

    public function update(Request $request, $id)
    {
        $data = food::find($id);

        $image = $request->image;

        $imagename = time() . "." . $image->getClientOriginalExtension();
        $request->image->move("foodimage", $imagename);
        $data->image = $imagename;
        $data->tags = $request->tags;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function upload(Request $request)
    {
        $data = new food();

        $image = $request->image;

        $imagename = time() . "." . $image->getClientOriginalExtension();
        $request->image->move("foodimage", $imagename);
        $data->image = $imagename;
        $data->title = $request->title;
        $data->tags = $request->tags;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }
    public function deletemenu($id)
    {
        $data = food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function reservation(Request $request)
    {
        $data = new reservation();

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->packet = $request->packet;
        $data->date = $request->date;
        $data->time = $request->time;
        $data->message = $request->message;
        $data->save();

        event(new ReservationEvent());
        session()->flash('success', 'Reservasi berhasil dibuat!');
        return redirect()->back();
    }

    public function viewreservation(
        Request $request,
        $order = null,
        $sort = null
    ) {
        if (Auth::check()) {
            // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // Memeriksa tipe pengguna
            if ($user->usertype == 1) {
                if ($sort && $order) {
                    $data = reservation::orderBy($order, $sort)->get();
                } elseif ($request->min && $request->max) {
                    $data = reservation::whereBetween("date", [
                        $request->min,
                        $request->max,
                    ])->get();
                } else {
                    $data = reservation::where(
                        "name",
                        "Like",
                        "%" . $request->search . "%"
                    )
                        ->orWhere("email", "Like", "%" . $request->search . "%")
                        ->orWhere("phone", "Like", "%" . $request->search . "%")
                        ->orWhere(
                            "message",
                            "Like",
                            "%" . $request->search . "%"
                        )
                        ->get();
                }
                return view("admin.adminreservation", compact("data"));
            } else {
                return redirect("login"); // Ubah  sesuai dengan halaman tujuan pengguna biasa
            }
        } else {
            return redirect("login");
        }
    }

    public function viewpacket(Request $request, $order = null, $sort = null)
    {
        if (Auth::check()) {
            // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // Memeriksa tipe pengguna
            if ($user->usertype == 1) {
                if ($sort && $order) {
                    $data = packet::orderBy($order, $sort)->get();
                } else {
                    $data = packet::where(
                        "name",
                        "Like",
                        "%" . $request->search . "%"
                    )->get();
                }
                return view("admin.adminpacket", compact("data"));
            } else {
                // Arahkan pengguna biasa ke halaman lain, misalnya halaman home
                return redirect("login"); // Ubah 'home' sesuai dengan halaman tujuan pengguna biasa
            }
        } else {
            return redirect("login");
        }
    }

    public function uploadpacket(Request $request)
    {
        if (Auth::check()) {
            // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // Memeriksa tipe pengguna
            if ($user->usertype == 1) {
                $data = new packet();
                $image = $request->image;
                $imagename =
                    time() . "." . $image->getClientOriginalExtension();
                $request->image->move("packetimage", $imagename);
                $data->image = $imagename;
                $data->name = $request->name;
                $data->description = $request->description;
                $data->save();
                return redirect()->back();
            } else {
                // Arahkan pengguna biasa ke halaman lain, misalnya halaman home
                return redirect("home"); // Ubah 'home' sesuai dengan halaman tujuan pengguna biasa
            }
        } else {
            return redirect("login");
        }
    }
    public function uploadtestimonial(Request $request)
    {
        if (Auth::check()) {
            // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // Memeriksa tipe pengguna
            if ($user->usertype == 1) {
                $data = new testimonial();
                $image = $request->image;
                $imagename =
                    time() . "." . $image->getClientOriginalExtension();
                $request->image->move("testimonialimage", $imagename);
                $data->image = $imagename;
                $data->title = $request->title;
                $data->description = $request->description;
                $data->save();
                return redirect()->back();
            } else {
                // Arahkan pengguna biasa ke halaman lain, misalnya halaman home
                return redirect("home"); // Ubah 'home' sesuai dengan halaman tujuan pengguna biasa
            }
        } else {
            return redirect("login");
        }
    }

    public function updatepacket($id)
    {
        $data = packet::find($id);

        return view("admin.updatepacket", compact("data"));
    }

    public function updatetestimonial($id)
    {
        $data = testimonial::find($id);

        return view("admin.updatetestimonial", compact("data"));
    }

    public function updatefoodpacket(Request $request, $id)
    {
        $data = packet::find($id);

        $image = $request->image;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->image->move("packetimage", $imagename);
            $data->image = $imagename;
        }

        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function updatetestimonialpage(Request $request, $id)
    {
        $data = testimonial::find($id);

        $image = $request->image;
        if ($image) {
            $imagename = time() . "." . $image->getClientOriginalExtension();
            $request->image->move("testimonialimage", $imagename);
            $data->image = $imagename;
        }

        $data->title = $request->title;
        $data->description = $request->description;
        $data->save();
        return redirect()->back();
    }

    public function deletepacket($id)
    {
        $data = packet::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function deletetestimonial($id)
    {
        $data = testimonial::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function orders(Request $request, $order = null, $sort = null)
    {
        if ($sort && $order) {
            $data = order::orderBy($order, $sort)->get();
        } else {
            $data = order::all();
        }

        if ($request->min && $request->max) {
            foreach ($data as $value) {
                $value->total = $value->price * $value->quantity;
            }

            $data = $data
                ->whereBetween("total", [$request->min, $request->max])
                ->values();
        }

        return view("admin.orders", compact("data"));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $data = order::where("name", "Like", "%" . $search . "%")
            ->orWhere("foodname", "Like", "%" . $search . "%")
            ->orWhere("address", "Like", "%" . $search . "%")
            ->orWhere("phone", "Like", "%" . $search . "%")
            ->get();

        return view("admin.orders", compact("data"));
    }

    public function payment()
    {
        $data = Payment::with("order")
            ->orderBy("created_at", "desc")
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

        return view("admin.payments", compact("data"));
    }

    public function paymentStatus(Request $request)
    {
        $data = Payment::find($request->id);
        $data->status = filter_var(
            $request->input("status"),
            FILTER_VALIDATE_BOOLEAN
        );
        $data->save();
        $user = User::find($data->created_by);
        if ($data->status) {
            event(new PaymentApprovalEvent($user, $data->status));
        }

        return redirect()->route("payments");
    }
    public function viewtestimonial(Request $request, $order = null, $sort = null)
    {
        if (Auth::check()) {
            // Mendapatkan pengguna yang sedang login
            $user = Auth::user();

            // Memeriksa tipe pengguna
            if ($user->usertype == 1) {
                if ($sort && $order) {
                    $data = testimonial::orderBy($order, $sort)->get();
                } else {
                    $data = testimonial::where(
                        "title",
                        "Like",
                        "%" . $request->search . "%"
                    )->get();
                }
                return view("admin.testimonial", compact("data"));
            } else {
                // Arahkan pengguna biasa ke halaman lain, misalnya halaman home
                return redirect("login"); // Ubah 'home' sesuai dengan halaman tujuan pengguna biasa
            }
        } else {
            return redirect("login");
        }
    }
    public function all_messages($order = 'name', $sort = 'asc'){
        // Pastikan sortasi valid
        $validSortDirections = ['asc', 'desc'];
    
        if (in_array($sort, $validSortDirections)) {
            $data = Contact::orderBy($order, $sort)->get();
        } else {
            $data = Contact::orderBy('name', 'asc')->get(); // Default sorting jika sortasi tidak valid
        }
    
        return view('admin.all_messages', compact('data'));
    }
    public function send_mail($id){
        $data = Contact::find($id);
        return view('admin.send_mail',compact('data'));
    }
    public function mail(Request $request,$id)
{
    $data = Contact::find($id);
    $details = [
        'greeting' => $request->greeting,
        'body' => $request->body,
        'action_text' => $request->action_text,
        'action_url' => $request->action_url,
        'endline' => $request->endline,
    ];

    Notification::send($data, new SendEmailNotification($details));
    session()->flash('success', 'Email Sudah Terkirim ke Pengguna');
    return redirect()->back();
}
    
}
