<?php
App::uses('AppController', 'Controller');
/**
 * Empresas Controller
 *
 * @property Empresa $Empresa
 * @property PaginatorComponent $Paginator
 */
class EmpresasController extends AppController {

	public $uses = array('Empresa');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

	public function index() {
        $empresas = $this->Empresa->find('all');
        $this->set(array(
            'empresas' => $empresas,
            '_serialize' => array('empresas')
        ));
    }
 
    public function add() {
        $this->Empresa->create();
        if ($this->Empresa->save($this->request->data)) {
             $message = 'Created';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
     
    public function view($id) {
        $phone = $this->Empresa->findById($id);
        $this->set(array(
            'phone' => $phone,
            '_serialize' => array('phone')
        ));
    }
 
     
    public function edit($id) {
        $this->Empresa->id = $id;
        if ($this->Empresa->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
     
    public function delete($id) {
        if ($this->Empresa->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }
}
