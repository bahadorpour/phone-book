<?php
/**
 * Created by PhpStorm.
 * User: Bahadorpour
 * Date: 5/20/2019
 * Time: 2:36 PM
 */

use App\Http\BaseController;
use App\Http\Request;
use App\Models\DB;

class AdminController extends BaseController
{
    public function show()
    {
        session_start();
        return $this->view('Admin/show');
    }

    public function logout()
    {
        session_start();
        session_unset($_SESSION['username']);
        session_destroy();
        $this->redirect('../home/loginForm');
    }

    public function accounts()
    {
        $fields = ["*"];
        $get = DB::table("member", $fields)
            ->innerJoin("department_group", "member.dep_id_fk", "department_group.dep_ID")
            ->get();
        return $this->view('Admin/accounts', ['res' => $get]);
    }

    public function del()
    {
        $id = Request::getRequest(["data_id"]);

        DB::table("member")
            ->delete("mem_id", $id[0]);

        echo $id[0];
    }

    public function insertMemberForm()
    {
        $fields = ["department_group.dep_ID","department_group.dep_name"];

        $get = DB::table("department_group", $fields)->get();

        return $this->view('Admin/insertMemberForm' , ['res' => $get]);
    }

    public function insertMember()
    {
        $arrayRequired = Request::postRequest(["memFname", "memLname", "memLocalPhone", "memDepGroup"]);
        $arrayNotRequired = Request::notReqPostRequest([ "memAdd", "memPhone", "memEmail"]);
        $arrayPostReq = array_merge($arrayRequired,$arrayNotRequired);

        $fields = ["member.first_name", "member.last_name", "member.local_phone", "member.dep_id_fk", "member.address", "member.phone", "member.email"];

        DB::table("member")->add($fields, $arrayPostReq);

        $this->redirect("accounts");
    }

    public function editMemberForm()
    {
        session_start();
        $fields = ["department_group.dep_ID","department_group.dep_name"];

        $get = DB::table("department_group", $fields)->get();
        return $this->view('Admin/editMemberForm', ['res' => $get]);
    }

    public function findMemberID()
    {
        session_start();

        $id = Request::getRequest(["data_id"]);
        $fields = ["*"];

        $get = DB::table("member",$fields)
            ->where("mem_id", $id[0])
            ->get();

      /* $getJSON=  json_encode($get[0]);
       echo($getJSON);*/
        $_SESSION['mem_id'] = $get[0]["mem_id"];
        $_SESSION['dep_id_fk'] = $get[0]["dep_id_fk"];
        $_SESSION['first_name'] = $get[0]["first_name"];
        $_SESSION['last_name'] = $get[0]["last_name"];
        $_SESSION['phone'] = $get[0]["phone"];
        $_SESSION['local_phone'] = $get[0]["local_phone"];
        $_SESSION['email'] = $get[0]["email"];
        $_SESSION['address'] = $get[0]["address"];
    }

    public function editMember()
    {
        $arrayGetReq = Request::getRequest(["memFname", "memLname", "memPhone", "memLocalPhone", "memEmail", "memDepGroup", "memAdd"]);
        $getId = Request::getRequest(["id"]);
        $fields = ["member.first_name", "member.last_name", "member.phone", "member.local_phone", "member.email", "member.dep_id_fk", "member.address"];

        $data = array(
            $fields[0] => $arrayGetReq[0],
            $fields[1] => $arrayGetReq[1],
            $fields[2] => $arrayGetReq[2],
            $fields[3] => $arrayGetReq[3],
            $fields[4] => $arrayGetReq[4],
            $fields[5] => $arrayGetReq[5],
            $fields[6] => $arrayGetReq[6]
        );

        DB::table("member", $fields)->updates($data, "mem_id", $getId[0]);

       $this->redirect("accounts");
    }
}

