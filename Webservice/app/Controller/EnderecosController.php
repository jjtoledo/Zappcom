<?php
App::uses('AppController', 'Controller');
/**
 * Enderecos Controller
 *
 * @property Endereco $Endereco
 * @property PaginatorComponent $Paginator
 */
class EnderecosController extends AppController {

	public $uses = array('Endereco');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

	public function index() {
        $enderecos = $this->Endereco->find('all');
        $this->set(array(
            'enderecos' => $enderecos,
            '_serialize' => array('enderecos')
        ));
    }
 
    public function add() {
        $this->Endereco->create();
        if ($this->Endereco->save($this->request->data)) {
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
        $phone = $this->Endereco->findById($id);
        $this->set(array(
            'phone' => $phone,
            '_serialize' => array('phone')
        ));
    }
 
     
    public function edit($id) {
        $this->Endereco->id = $id;
        if ($this->Endereco->save($this->request->data)) {
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
        if ($this->Endereco->delete($id)) {
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
