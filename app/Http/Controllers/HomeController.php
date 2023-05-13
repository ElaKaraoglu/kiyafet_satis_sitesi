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
    public static function categorylist()
    {
        return kategoriler::where('parent_id', "=", 0)->with('children')->get();
    }
   public function index()
   {

        $sliderdata=kategoriler::limit(4)->get();
        $productlist=urunler::limit(4)->get();
        $setting=settings::first();
        $userstatus=false;
        return view('front.index',[
            'sliderdata'=>$sliderdata,
            'productlist'=>$productlist,
            'setting'=>$setting,
            'userstatus'=>$userstatus
        ]);
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

}
