<?php 
namespace App\Controllers;
use App\Models\Helperwork;
//use CodeIgniter\Controller;
use App\Controllers\BaseController;
class Testcrud extends BaseController
{
    // show users list
    
    public function index(){
        //define("ENVIRONMENT","development");

        $userModel = new Helperwork();
        $data['users'] = $userModel->orderBy('hewo_srno', 'DESC')->findAll();
        
        return view('user_view', $data);
    }  

  

    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $userModel = new Helperwork();
        $data = [
            'funeral_recep_srno' => $this->request->getVar('funeral_recep_srno'),
            'part_code'  => $this->request->getVar('part_code'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }
    // show single user
    public function singleUser($id = null){
        $userModel = new Helperwork();
        $data['user_obj'] = $userModel->where('hewo_srno', $id)->first();
        return view('edit_user', $data);
    }
    // update user data
    public function update(){
        $userModel = new Helperwork();
        $id = $this->request->getVar('hewo_srno');
        $data = [
            'funeral_recep_srno' => $this->request->getVar('funeral_recep_srno'),
            'part_code'  => $this->request->getVar('part_code'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new Helperwork();
        $data['user'] = $userModel->where('hewo_srno', $id)->delete($id);
        return $this->response->redirect(site_url('/users-list'));
    }    
}