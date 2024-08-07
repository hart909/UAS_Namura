PGDMP                      |            namura    16.3    16.3 h    u           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            v           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            w           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            x           1262    16688    namura    DATABASE     }   CREATE DATABASE namura WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'English_Indonesia.1252';
    DROP DATABASE namura;
                postgres    false            �            1259    16776    carts    TABLE     �   CREATE TABLE public.carts (
    id bigint NOT NULL,
    user_id character varying(255),
    food_id bigint,
    quantity character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.carts;
       public         heap    postgres    false            �            1259    16775    carts_id_seq    SEQUENCE     u   CREATE SEQUENCE public.carts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.carts_id_seq;
       public          postgres    false    232            y           0    0    carts_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.carts_id_seq OWNED BY public.carts.id;
          public          postgres    false    231            �            1259    16817    contacts    TABLE     2  CREATE TABLE public.contacts (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    phone character varying(255) NOT NULL,
    message text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.contacts;
       public         heap    postgres    false            �            1259    16816    contacts_id_seq    SEQUENCE     x   CREATE SEQUENCE public.contacts_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.contacts_id_seq;
       public          postgres    false    240            z           0    0    contacts_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.contacts_id_seq OWNED BY public.contacts.id;
          public          postgres    false    239            �            1259    16716    failed_jobs    TABLE     &  CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);
    DROP TABLE public.failed_jobs;
       public         heap    postgres    false            �            1259    16715    failed_jobs_id_seq    SEQUENCE     {   CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.failed_jobs_id_seq;
       public          postgres    false    221            {           0    0    failed_jobs_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;
          public          postgres    false    220            �            1259    16749    food    TABLE     B  CREATE TABLE public.food (
    id bigint NOT NULL,
    title character varying(255),
    price character varying(255),
    image character varying(255),
    description character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    tags character varying(255)
);
    DROP TABLE public.food;
       public         heap    postgres    false            �            1259    16748    food_id_seq    SEQUENCE     t   CREATE SEQUENCE public.food_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 "   DROP SEQUENCE public.food_id_seq;
       public          postgres    false    226            |           0    0    food_id_seq    SEQUENCE OWNED BY     ;   ALTER SEQUENCE public.food_id_seq OWNED BY public.food.id;
          public          postgres    false    225            �            1259    16690 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         heap    postgres    false            �            1259    16689    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public          postgres    false    216            }           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
          public          postgres    false    215            �            1259    16825    notifications    TABLE     `  CREATE TABLE public.notifications (
    id uuid NOT NULL,
    type character varying(255) NOT NULL,
    notifiable_type character varying(255) NOT NULL,
    notifiable_id bigint NOT NULL,
    data text NOT NULL,
    read_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 !   DROP TABLE public.notifications;
       public         heap    postgres    false            �            1259    16792    orders    TABLE     �  CREATE TABLE public.orders (
    id bigint NOT NULL,
    foodname character varying(255) NOT NULL,
    price character varying(255) NOT NULL,
    quantity character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    phone character varying(255) NOT NULL,
    address character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    payment_id integer
);
    DROP TABLE public.orders;
       public         heap    postgres    false            �            1259    16791    orders_id_seq    SEQUENCE     v   CREATE SEQUENCE public.orders_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.orders_id_seq;
       public          postgres    false    234            ~           0    0    orders_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.orders_id_seq OWNED BY public.orders.id;
          public          postgres    false    233            �            1259    16767    packets    TABLE       CREATE TABLE public.packets (
    id bigint NOT NULL,
    name character varying(255),
    description character varying(255),
    image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
    DROP TABLE public.packets;
       public         heap    postgres    false            �            1259    16766    packets_id_seq    SEQUENCE     w   CREATE SEQUENCE public.packets_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.packets_id_seq;
       public          postgres    false    230                       0    0    packets_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.packets_id_seq OWNED BY public.packets.id;
          public          postgres    false    229            �            1259    16708    password_reset_tokens    TABLE     �   CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);
 )   DROP TABLE public.password_reset_tokens;
       public         heap    postgres    false            �            1259    16801    payment    TABLE     �   CREATE TABLE public.payment (
    id bigint NOT NULL,
    image character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    status boolean,
    created_by integer
);
    DROP TABLE public.payment;
       public         heap    postgres    false            �            1259    16800    payment_id_seq    SEQUENCE     w   CREATE SEQUENCE public.payment_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 %   DROP SEQUENCE public.payment_id_seq;
       public          postgres    false    236            �           0    0    payment_id_seq    SEQUENCE OWNED BY     A   ALTER SEQUENCE public.payment_id_seq OWNED BY public.payment.id;
          public          postgres    false    235            �            1259    16728    personal_access_tokens    TABLE     �  CREATE TABLE public.personal_access_tokens (
    id bigint NOT NULL,
    tokenable_type character varying(255) NOT NULL,
    tokenable_id bigint NOT NULL,
    name character varying(255) NOT NULL,
    token character varying(64) NOT NULL,
    abilities text,
    last_used_at timestamp(0) without time zone,
    expires_at timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
 *   DROP TABLE public.personal_access_tokens;
       public         heap    postgres    false            �            1259    16727    personal_access_tokens_id_seq    SEQUENCE     �   CREATE SEQUENCE public.personal_access_tokens_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 4   DROP SEQUENCE public.personal_access_tokens_id_seq;
       public          postgres    false    223            �           0    0    personal_access_tokens_id_seq    SEQUENCE OWNED BY     _   ALTER SEQUENCE public.personal_access_tokens_id_seq OWNED BY public.personal_access_tokens.id;
          public          postgres    false    222            �            1259    16758    reservations    TABLE     �  CREATE TABLE public.reservations (
    id bigint NOT NULL,
    name character varying(255),
    email character varying(255),
    phone character varying(255),
    packet character varying(255),
    date character varying(255),
    "time" character varying(255),
    message character varying(255),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.reservations;
       public         heap    postgres    false            �            1259    16757    reservations_id_seq    SEQUENCE     |   CREATE SEQUENCE public.reservations_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.reservations_id_seq;
       public          postgres    false    228            �           0    0    reservations_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.reservations_id_seq OWNED BY public.reservations.id;
          public          postgres    false    227            �            1259    16739    sessions    TABLE     �   CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);
    DROP TABLE public.sessions;
       public         heap    postgres    false            �            1259    16808    testimonials    TABLE     "  CREATE TABLE public.testimonials (
    id bigint NOT NULL,
    title character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    image character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);
     DROP TABLE public.testimonials;
       public         heap    postgres    false            �            1259    16807    testimonials_id_seq    SEQUENCE     |   CREATE SEQUENCE public.testimonials_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.testimonials_id_seq;
       public          postgres    false    238            �           0    0    testimonials_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.testimonials_id_seq OWNED BY public.testimonials.id;
          public          postgres    false    237            �            1259    16697    users    TABLE     �  CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    usertype character varying(255) DEFAULT '0'::character varying NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    current_team_id bigint,
    profile_photo_path character varying(2048),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    two_factor_secret text,
    two_factor_recovery_codes text,
    two_factor_confirmed_at timestamp(0) without time zone
);
    DROP TABLE public.users;
       public         heap    postgres    false            �            1259    16696    users_id_seq    SEQUENCE     u   CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public          postgres    false    218            �           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public          postgres    false    217            �           2604    16779    carts id    DEFAULT     d   ALTER TABLE ONLY public.carts ALTER COLUMN id SET DEFAULT nextval('public.carts_id_seq'::regclass);
 7   ALTER TABLE public.carts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    232    231    232            �           2604    16820    contacts id    DEFAULT     j   ALTER TABLE ONLY public.contacts ALTER COLUMN id SET DEFAULT nextval('public.contacts_id_seq'::regclass);
 :   ALTER TABLE public.contacts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    240    239    240            �           2604    16719    failed_jobs id    DEFAULT     p   ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);
 =   ALTER TABLE public.failed_jobs ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    221    220    221            �           2604    16752    food id    DEFAULT     b   ALTER TABLE ONLY public.food ALTER COLUMN id SET DEFAULT nextval('public.food_id_seq'::regclass);
 6   ALTER TABLE public.food ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    225    226    226            �           2604    16693    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    216    215    216            �           2604    16795 	   orders id    DEFAULT     f   ALTER TABLE ONLY public.orders ALTER COLUMN id SET DEFAULT nextval('public.orders_id_seq'::regclass);
 8   ALTER TABLE public.orders ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    234    233    234            �           2604    16770 
   packets id    DEFAULT     h   ALTER TABLE ONLY public.packets ALTER COLUMN id SET DEFAULT nextval('public.packets_id_seq'::regclass);
 9   ALTER TABLE public.packets ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    229    230    230            �           2604    16804 
   payment id    DEFAULT     h   ALTER TABLE ONLY public.payment ALTER COLUMN id SET DEFAULT nextval('public.payment_id_seq'::regclass);
 9   ALTER TABLE public.payment ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    235    236    236            �           2604    16731    personal_access_tokens id    DEFAULT     �   ALTER TABLE ONLY public.personal_access_tokens ALTER COLUMN id SET DEFAULT nextval('public.personal_access_tokens_id_seq'::regclass);
 H   ALTER TABLE public.personal_access_tokens ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    223    222    223            �           2604    16761    reservations id    DEFAULT     r   ALTER TABLE ONLY public.reservations ALTER COLUMN id SET DEFAULT nextval('public.reservations_id_seq'::regclass);
 >   ALTER TABLE public.reservations ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    228    227    228            �           2604    16811    testimonials id    DEFAULT     r   ALTER TABLE ONLY public.testimonials ALTER COLUMN id SET DEFAULT nextval('public.testimonials_id_seq'::regclass);
 >   ALTER TABLE public.testimonials ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    238    237    238            �           2604    16700    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    217    218    218            i          0    16776    carts 
   TABLE DATA           W   COPY public.carts (id, user_id, food_id, quantity, created_at, updated_at) FROM stdin;
    public          postgres    false    232   M|       q          0    16817    contacts 
   TABLE DATA           [   COPY public.contacts (id, name, email, phone, message, created_at, updated_at) FROM stdin;
    public          postgres    false    240   �|       ^          0    16716    failed_jobs 
   TABLE DATA           a   COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
    public          postgres    false    221   �}       c          0    16749    food 
   TABLE DATA           b   COPY public.food (id, title, price, image, description, created_at, updated_at, tags) FROM stdin;
    public          postgres    false    226   �}       Y          0    16690 
   migrations 
   TABLE DATA           :   COPY public.migrations (id, migration, batch) FROM stdin;
    public          postgres    false    216   y       r          0    16825    notifications 
   TABLE DATA           x   COPY public.notifications (id, type, notifiable_type, notifiable_id, data, read_at, created_at, updated_at) FROM stdin;
    public          postgres    false    241   ��       k          0    16792    orders 
   TABLE DATA           y   COPY public.orders (id, foodname, price, quantity, name, phone, address, created_at, updated_at, payment_id) FROM stdin;
    public          postgres    false    234   �       g          0    16767    packets 
   TABLE DATA           W   COPY public.packets (id, name, description, image, created_at, updated_at) FROM stdin;
    public          postgres    false    230   �       \          0    16708    password_reset_tokens 
   TABLE DATA           I   COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
    public          postgres    false    219   Â       m          0    16801    payment 
   TABLE DATA           X   COPY public.payment (id, image, created_at, updated_at, status, created_by) FROM stdin;
    public          postgres    false    236   ��       `          0    16728    personal_access_tokens 
   TABLE DATA           �   COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at) FROM stdin;
    public          postgres    false    223   n�       e          0    16758    reservations 
   TABLE DATA           u   COPY public.reservations (id, name, email, phone, packet, date, "time", message, created_at, updated_at) FROM stdin;
    public          postgres    false    228   ��       a          0    16739    sessions 
   TABLE DATA           _   COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
    public          postgres    false    224   Ä       o          0    16808    testimonials 
   TABLE DATA           ]   COPY public.testimonials (id, title, description, image, created_at, updated_at) FROM stdin;
    public          postgres    false    238   .�       [          0    16697    users 
   TABLE DATA           �   COPY public.users (id, name, email, usertype, email_verified_at, password, remember_token, current_team_id, profile_photo_path, created_at, updated_at, two_factor_secret, two_factor_recovery_codes, two_factor_confirmed_at) FROM stdin;
    public          postgres    false    218   �       �           0    0    carts_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.carts_id_seq', 50, true);
          public          postgres    false    231            �           0    0    contacts_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.contacts_id_seq', 13, true);
          public          postgres    false    239            �           0    0    failed_jobs_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);
          public          postgres    false    220            �           0    0    food_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.food_id_seq', 13, true);
          public          postgres    false    225            �           0    0    migrations_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.migrations_id_seq', 20, true);
          public          postgres    false    215            �           0    0    orders_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.orders_id_seq', 21, true);
          public          postgres    false    233            �           0    0    packets_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.packets_id_seq', 8, true);
          public          postgres    false    229            �           0    0    payment_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.payment_id_seq', 2, true);
          public          postgres    false    235            �           0    0    personal_access_tokens_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.personal_access_tokens_id_seq', 1, false);
          public          postgres    false    222            �           0    0    reservations_id_seq    SEQUENCE SET     B   SELECT pg_catalog.setval('public.reservations_id_seq', 12, true);
          public          postgres    false    227            �           0    0    testimonials_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public.testimonials_id_seq', 4, true);
          public          postgres    false    237            �           0    0    users_id_seq    SEQUENCE SET     ;   SELECT pg_catalog.setval('public.users_id_seq', 10, true);
          public          postgres    false    217            �           2606    16783    carts carts_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.carts
    ADD CONSTRAINT carts_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.carts DROP CONSTRAINT carts_pkey;
       public            postgres    false    232            �           2606    16824    contacts contacts_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.contacts
    ADD CONSTRAINT contacts_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.contacts DROP CONSTRAINT contacts_pkey;
       public            postgres    false    240            �           2606    16724    failed_jobs failed_jobs_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);
 F   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_pkey;
       public            postgres    false    221            �           2606    16726 #   failed_jobs failed_jobs_uuid_unique 
   CONSTRAINT     ^   ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);
 M   ALTER TABLE ONLY public.failed_jobs DROP CONSTRAINT failed_jobs_uuid_unique;
       public            postgres    false    221            �           2606    16756    food food_pkey 
   CONSTRAINT     L   ALTER TABLE ONLY public.food
    ADD CONSTRAINT food_pkey PRIMARY KEY (id);
 8   ALTER TABLE ONLY public.food DROP CONSTRAINT food_pkey;
       public            postgres    false    226            �           2606    16695    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public            postgres    false    216            �           2606    16832     notifications notifications_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.notifications
    ADD CONSTRAINT notifications_pkey PRIMARY KEY (id);
 J   ALTER TABLE ONLY public.notifications DROP CONSTRAINT notifications_pkey;
       public            postgres    false    241            �           2606    16799    orders orders_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_pkey;
       public            postgres    false    234            �           2606    16774    packets packets_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.packets
    ADD CONSTRAINT packets_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.packets DROP CONSTRAINT packets_pkey;
       public            postgres    false    230            �           2606    16714 0   password_reset_tokens password_reset_tokens_pkey 
   CONSTRAINT     q   ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);
 Z   ALTER TABLE ONLY public.password_reset_tokens DROP CONSTRAINT password_reset_tokens_pkey;
       public            postgres    false    219            �           2606    16806    payment payment_pkey 
   CONSTRAINT     R   ALTER TABLE ONLY public.payment
    ADD CONSTRAINT payment_pkey PRIMARY KEY (id);
 >   ALTER TABLE ONLY public.payment DROP CONSTRAINT payment_pkey;
       public            postgres    false    236            �           2606    16735 2   personal_access_tokens personal_access_tokens_pkey 
   CONSTRAINT     p   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_pkey PRIMARY KEY (id);
 \   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_pkey;
       public            postgres    false    223            �           2606    16738 :   personal_access_tokens personal_access_tokens_token_unique 
   CONSTRAINT     v   ALTER TABLE ONLY public.personal_access_tokens
    ADD CONSTRAINT personal_access_tokens_token_unique UNIQUE (token);
 d   ALTER TABLE ONLY public.personal_access_tokens DROP CONSTRAINT personal_access_tokens_token_unique;
       public            postgres    false    223            �           2606    16765    reservations reservations_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.reservations
    ADD CONSTRAINT reservations_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.reservations DROP CONSTRAINT reservations_pkey;
       public            postgres    false    228            �           2606    16745    sessions sessions_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.sessions DROP CONSTRAINT sessions_pkey;
       public            postgres    false    224            �           2606    16815    testimonials testimonials_pkey 
   CONSTRAINT     \   ALTER TABLE ONLY public.testimonials
    ADD CONSTRAINT testimonials_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.testimonials DROP CONSTRAINT testimonials_pkey;
       public            postgres    false    238            �           2606    16707    users users_email_unique 
   CONSTRAINT     T   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);
 B   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_unique;
       public            postgres    false    218            �           2606    16705    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public            postgres    false    218            �           1259    16830 1   notifications_notifiable_type_notifiable_id_index    INDEX     �   CREATE INDEX notifications_notifiable_type_notifiable_id_index ON public.notifications USING btree (notifiable_type, notifiable_id);
 E   DROP INDEX public.notifications_notifiable_type_notifiable_id_index;
       public            postgres    false    241    241            �           1259    16736 8   personal_access_tokens_tokenable_type_tokenable_id_index    INDEX     �   CREATE INDEX personal_access_tokens_tokenable_type_tokenable_id_index ON public.personal_access_tokens USING btree (tokenable_type, tokenable_id);
 L   DROP INDEX public.personal_access_tokens_tokenable_type_tokenable_id_index;
       public            postgres    false    223    223            �           1259    16747    sessions_last_activity_index    INDEX     Z   CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);
 0   DROP INDEX public.sessions_last_activity_index;
       public            postgres    false    224            �           1259    16746    sessions_user_id_index    INDEX     N   CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);
 *   DROP INDEX public.sessions_user_id_index;
       public            postgres    false    224            i   �   x�u���0�li '��mjI�u��"N�5�H�d$��vr����ԙ��0��_��"Y;�4i��H�9VǠ�O��TJ���-�j}�V��aL�[<
��%�uUm�Z;aw��@�̴�4K�����2<+4{�p} |��W`      q   �   x�u���0���S� �_JOx#�b��˦4H ����bI&{���2S$�����	������-k@�B	�M8胈 �20�(��N�!�Q+��}մ�x&�~���@�<�9��=���?��/��Q.����f�\G�-�T��S���1���\H��-W4;�F�cg|#;����.�Ox��SJ?"�oh      ^      x������ � �      c   �  x�m�MO�0���W�h:��7�?��z�+Ȓ1믷\�����μ`�r:�'�T� ��\#\�e�ތY��Dv��#�F�����z��um}��G�߸�w�Q�.:+"$V�mSR�[�[���uj�B?RS�r���C��-x1�Sm�XIB#��b%	0�t��7Tu��hB��i�*�mC����(}+��+b�n�}�#����XJ�Ț�P0�j�M�29dF�I񂦄�=yg���$c�/�;����@8�T^`��֔g�E`<�����v�p��F�W��Q�	���Ͷ�w��m�A.n��*r�?�.�TS����0
r��d�#��?E�$�|���y&OR�AfQ�Mw��0������t�bzC۹��~�6y�N��)�d      Y   v  x�e�M�� ���0#l ?wɢ��2MC�T��8MH��|�<�8�M 	���#7y�<ݢ�"%{�� �������&}��~�BU
qڮ�tt�.��\n�Y�.ճ�%��|�.=�~���c�͂�����ˆ�d��1���X����![5R�U�C��;�(��f*��šh2�JֺZ�yPӟME]%��s`4y���ӊj�d5�V��i#� (I���6B�,��U�P�t�vo���D�p���<C,�F��t�}��M��q�cz�� ����<+�`��T��+X��l��Ϫ����8ݙ_\tt||j��j�5*��\'S	co�m+���T ?�.��W}��9	6ܩTWz�?�n����K��2!L      r      x������ � �      k   �   x��̿
�@��9�y%����6up(���KТ����A|{�.�T�������{}`��	����h �n8�ଥV�bAH�	��Xd�NG�nm�����ʪ����"q�x6���+J�{�E�����$�BcXkq�.^p�uqoo^n@�`&Χ��k�#n�N��!��>87��nj�y��om      g   �   x�m��j�0���S�>Z$Yrl��vɌי,Mi;���	�HJ�����E湿��F}�c��.5�5�oӷ��"���۟OG�ȲC�ct	)��Q���j^>� #�;��7�^:��NB�{?�$!>b֛å��kjZ�t�-Bq��IC�����"�8�#�ڧX��Pn�/-rU��[y ��4	�1�6¾?9�_�      \      x������ � �      m   ~   x�]̱�0�}��8���z�8��jB�"!�b��Ootd��r���:���Y����x.�?���*�կ2&�����4�"o-(%�6b�������|<8!Wa3��D�Tdc!i�M {���_��%�      `      x������ � �      e   (  x����j�0���S�F��?ͪ\d`�)��ұ3����b޾Q[F�E���I��='�������k���>��(�Ô��	؈�8(r�I[�X����M�A?ps Ʉq`��{�'� �w.p��B&B
>�xL߲�Ŏ�)�Ӝ�ҏtÐʩm/�F��!����p���9vE����E��������W�k�dX�t�i4xIG�&�;+�P0��e�*&�[��F� ���=�K����fi��NB�{0���a7`=4<YA×*m�:P�h;�x�bƵ6�؞F������      a   [  x�=��r�@E���Ԫ�v34RV8D 6$
"��Bcc���AM���{�]�1RgE;V���r�l��s�_L�2/���]�$����$�]��)c۞҅���}̫�]��� 4 �p�r�e�?	?鹧HjW �i�d��%`�D;���ȋ��D�\�`�M�G����kg��<�&�`(�YHM5�9$cN��=��.Rl�^I�y&����>���4恏��2�]4���:��,���P+]�,�#N0���~��/6.�tE0�9��d����u�HHk�ʣ#2,����q�{PTTԑ?�`��`l�xv��H]�H�fw�zEFf���"MQd��֦�j�~����      o   �   x�mNK�0\�S���>)
'0�a��͋6P�J���DY�Y�L2N��ZzP�vtq�&Jn2�� f\�wh� 'q��"^<�o*�{��C��{��Y�-�t�'��K�b�^S�0q�R��	���V�y*�����vW���λ_�9���{���*�=O�3��DDD�      [   T  x�u��n�P��1>���}�z9�E�6NP������m550��+�ɇ)�K��ޏ qØ�d	��Ռ�຃�sD�$���3O�L2�5I���H�M�Q�Ilۥ�E�5v&�?K4�+����0`�|C!"�7n�-�:��'<�@Z���Ѧ�F��!�~!���ͧi��*bw��)�
�:��S��n#^dX����!n���R�Ѳ��uP(F}VI���z˕p:���3�_����KiP�oM&�H5n�{��f�Onz�@x�S�ܫ�ΈeGW��%~�E�/9�����}`AcV=E{�3���NAD|�����V������     