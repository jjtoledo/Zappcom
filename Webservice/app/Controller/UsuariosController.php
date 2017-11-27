<?php
App::uses('AppController', 'Controller');
/**
 * Usuarios Controller
 *
 * @property Usuario $Usuario
 * @property PaginatorComponent $Paginator
 */
class UsuariosController extends AppController {

	public $uses = array('Usuario');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

	public function index() {
        $usuarios = $this->Usuario->find('all');
        $this->set(array(
            'usuarios' => $usuarios,
            '_serialize' => array('usuarios')
        ));
    }
 
    public function add() {
        $this->Usuario->create();
        if ($this->Usuario->save($this->request->data)) {
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
        $phone = $this->Usuario->findById($id);
        $this->set(array(
            'phone' => $phone,
            '_serialize' => array('phone')
        ));
    }
 
     
    public function edit($id) {
        $this->Usuario->id = $id;
        if ($this->Usuario->save($this->request->data)) {
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
        if ($this->Usuario->delete($id)) {
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
