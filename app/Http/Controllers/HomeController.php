<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\urunler;
use \App\Models\kategoriler;
use \App\Models\settings;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

   public function index()
   {
       $data=kategoriler::all();
       $resim1=urunler::find(46);
       $resim2=urunler::find(90);
       return view('front.index',['data'=>$data,'resim1'=>$resim1,'resim2'=>$resim2]);
   }
   public function product($id)
   {
    $data=urunler::find($id);
    return view('front.product',[
        'data'=>$data
    ]);


   }
   public function contact()
   {
       return view('front.contact');
   }
    public function parametre($id,$number)
    {
        echo "hii the parametre yo writed is $id";
        echo "<br>the sum of yours number is: " ,$id+$number;
    }
    // eğer sayfada parametreye göre bişeyler yapcaksam,htmle parametre verceksem
    public function parametreli($id,$number)
    {
       return view('front.parametreli',
       [
           'id'=>$id,
           'number'=>$number
       ]
       );
    }

    public function saved() // burada formda girdiğimiz isme göre durum almak için mesela isim ve parolaya göre o kişinin bilgilerini getirmede bunu yapabiliriz
    {
        $myarray=array('fname'=>"ela",'lname'=>"karaoğlu",'parola'=>12345);
        echo "succesfulll saved <br>";
        $getname=$_REQUEST["fname"];
        $getname2=$_REQUEST["lname"];
        if($myarray['fname']==$_REQUEST["fname"])
        {

           echo $myarray['parola'];
        }
        else
        {
            echo "no";
        }
        echo $_REQUEST["fname"],"<br>";// request post ile gelen dataların dizisidir indisleri ise formdaki namelerden oluşur
        echo $_REQUEST["lname"],"<br>";

    }
    public function login()
    {
        return view('front.loging');
    }

    public function register()
    {
        return view('front.register');
    }

    public function logincheck(Request $request)
    {
        // Form submit edilmiş mi diye kontrol et
    if ($request->isMethod('post')) {

        // Form'dan gelen verileri al
        $email = $request->input('email');
        $password = $request->input('password');
        $user=User::first();
        // Auth::attempt ile kullanıcıyı oturum açtırmaya çalış
        if ($user->email==$email && $user->password==$password) {

            // Oturum açma işlemi başarılıysa, kullanıcıyı yönlendir
            return view('admin.index');
        }

        // Oturum açma işlemi başarısızsa, hata mesajını göster
        return back()->withErrors([
            'email' => 'Email adresi veya şifre yanlış.',
        ]);
    }

    // Form submit edilmemişse, giriş sayfasını göster
    return view('front.loging');
    }

    public function userlogin()
    {
        return view('front.userlogin');
    }

    public function userlogincheck(Request $request)
    {
        // Form submit edilmiş mi diye kontrol et
    if ($request->isMethod('post')) {

        // Form'dan gelen verileri al
        $email = $request->input('email');
        $password = $request->input('password');
        $user=User::first();
        // Auth::attempt ile kullanıcıyı oturum açtırmaya çalış
        if ($user->email==$email && $user->password==$password) {

            // Oturum açma işlemi başarılıysa, kullanıcıyı yönlendir
             $sliderdata=kategoriler::limit(4)->get();
            $productlist=urunler::limit(4)->get();
            $setting=settings::first();
            $userstatus=true;
            $user=User::first();


            return view('front.index',[
                'sliderdata'=>$sliderdata,
                'productlist'=>$productlist,
                'setting'=>$setting,
                'userstatus'=>$userstatus,
                'user'=>$user
            ]);
        }

        // Oturum açma işlemi başarısızsa, hata mesajını göster
        return back()->withErrors([
            'email' => 'Email adresi veya şifre yanlış.',
        ]);
    }

    // Form submit edilmemişse, giriş sayfasını göster
    return view('front.userlogin');
    }

     public function products($id)
     {
       $data=urunler::where('kategori_id',$id);
       return view('front.products',[
        'data'=>$data
       ]);
     }
     public  function product_page()
    {
        $data=urunler::all();
         return view('front.product_page',[
            'data'=>$data
         ]);


    }
    public  function product_ecpan()
    {
        $data=urunler::where('kategori_id',22)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
           // diğer ürün özelliklerini burada kullanabilirsiniz
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_ecust()
    {
        $data=urunler::where('kategori_id',23)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);
    }
    public  function product_ecay()
    {
        $data=urunler::where('kategori_id',24)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kcay()
    {
        $data=urunler::where('kategori_id',21)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);
    }
    public  function product_kce()
    {
        $data=urunler::where('kategori_id',18)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kcust()
    {
        $data=urunler::where('kategori_id',19)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kcpan()
    {
        $data=urunler::where('kategori_id',20)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_epan()
    {
        $data=urunler::where('kategori_id',15)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_et()
    {
        $data=urunler::where('kategori_id',16)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_eka()
    {
        $data=urunler::where('kategori_id',14)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);
    }
    public  function product_es()
    {
        $data=urunler::where('kategori_id',12)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);
    }
    public  function product_kay()
    {
        $data=urunler::where('kategori_id',11)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);
    }
    public  function product_kust()
    {
        $data=urunler::where('kategori_id',7)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kpan()
    {
        $data=urunler::where('kategori_id',6)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kel()
    {
        $data=urunler::where('kategori_id',8)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kaks()
    {
        $data=urunler::where('kategori_id',9)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_km()
    {
        $data=urunler::where('kategori_id',10)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_ket()
    {
        $data=urunler::where('kategori_id',5)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_k()
    {
        $data=urunler::where('kategori_id',1)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_ec()
    {
        $data=urunler::where('kategori_id',4)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }
    public  function product_kc()
    {
        $data=urunler::where('kategori_id',3)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);
    }
    public  function product_e()
    {
        $data=urunler::where('kategori_id',2)->get();
        $urunler=[];
        $i=0;
        $total=0;
       foreach ($data as $urun) {
           $urunler[$i] = $urun;
           $i++;
       }
        return view('front.product_page',[
            'data'=>$urunler
         ]);

    }

}
