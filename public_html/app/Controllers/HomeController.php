<?php

/**
 * Home controller: Accepts input and converts it to commands for the model and home view.
 * Author: Mojdeh Bahadorpour
 */

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;
use App\Packages\language;
use App\Packages\flashMessenger;

class HomeController extends BaseController
{
    public function show()
    {
        //        return $this->view("home/search", ['res' => null]);
    }

    public function search()
    {
        $fields = ["department_group.dep_ID", "department_group.dep_name"];

        $get = DB::table("department_group", $fields)->get();

        return $this->view('home/search', ['res' => $get, 'lang' => language::$EN]);
    }

    public function result()
    {
        $arrayGetReq = Request::getRequest(["memFname", "memLname", "memPhone", "memLocalPhone", "memEmail", "memDepGroup", "memAdd"]);
        $fields = ["member.first_name", "member.last_name", "member.phone", "member.local_phone", "member.email", "member.dep_id_fk", "member.address", "department_group.dep_name"];

        $get = DB::table("member", $fields)
            ->innerJoin("department_group", "member.dep_id_fk", "department_group.dep_ID")
            ->where($fields[0], $arrayGetReq[0])
            ->orWhere($fields[1], $arrayGetReq[1])
            ->orWhere($fields[2], $arrayGetReq[2])
            ->orWhere($fields[3], $arrayGetReq[3])
            ->orWhere($fields[4], $arrayGetReq[4])
            ->orWhere($fields[5], $arrayGetReq[5])
            ->orWhere($fields[6], $arrayGetReq[6])
            ->get();

        return $this->view("home/result", ['res' => $get]);
    }

    public function loginForm()
    {
        return $this->view("home/loginForm");
    }

    public function login()
    {
        session_start();

        $arrayPostReq = Request::postRequest(["username", "password"]);
        $encryptPass = md5($arrayPostReq[1]);

        if (empty($arrayPostReq)) {
            $this->redirect("loginForm");
        }

        $fields = ["admin_app.fullname", "admin_app.email", "admin_app.username", "admin_app.password"];
        $get = DB::table("admin_app", $fields)
            ->where($fields[2], $arrayPostReq[0])
            ->andwhere($fields[3], $encryptPass)
            ->get();

        if (count($get) != 0) {
            $_SESSION['username'] = $get[0]["fullname"];

            $this->redirect("../Admin/show");
        } else {
            //            flashMessenger::showError("نام کاربری یا رمز عبور صحیح نمی باشد");
            $msg = "0";
            $this->view("home/loginForm", ['msg' => $msg]);
        }
    }

    public function forgetPassword()
    {
        return $this->view("home/forgetPassword");
    }

    public function resetPassword()
    {
        $email = Request::postRequest(["email"]);
        $fields = ["admin_id", "admin_app.email"];

        $post = DB::table("admin_app", $fields)
            ->where($fields[1], $email[0])
            ->get();

        if (count($post) != 0) {
            return $this->view("home/resetPassword", ['res' => $post[0]["admin_id"]]);
        } else {
            $msg = "1";
            /*$msg = "کاربری با آدرس ایمیل واردشده در برنامه ثبت نشده است";*/
            $this->redirect("forgetPassword?msg={$msg}");
        }
    }

    public function updateNewPass()
    {
        $arrayPosReq = Request::postRequest(["newPass", "confirmNewPass", "id"]);
        $fields = ["admin_id", "fullname", "email", "username", "password"];

        if ($arrayPosReq[0] == $arrayPosReq[1]) {
            $encryptPass = md5(strip_tags(trim($arrayPosReq[0])));
            DB::table("admin_app", $fields)
                ->update("password", $encryptPass, "admin_id", $arrayPosReq[2]);

            $msg = "2";
            /*$msg = "رمز شما با موفقیت تغییر کرد";*/
            $this->redirect("loginForm?msg={$msg}");
        } else {
            $msg = "2";
            //            $msg = "دو رمز عبور یکسان وارد نمایید";
            $this->view("home/loginForm", ['msg' => $msg]);
        }
    }
}