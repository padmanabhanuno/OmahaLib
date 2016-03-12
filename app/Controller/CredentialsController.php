<?php
App::uses('AppController', 'Controller');
/**
 * Credentials Controller
 *
 * @property Credential $Credential
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CredentialsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Credential->recursive = 0;
		$this->set('credentials', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Credential->exists($id)) {
			throw new NotFoundException(__('Invalid credential'));
		}
		$options = array('conditions' => array('Credential.' . $this->Credential->primaryKey => $id));
		$this->set('credential', $this->Credential->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Credential->create();
			if ($this->Credential->save($this->request->data)) {
				$this->Session->setFlash(__('The credential has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credential could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Credential->exists($id)) {
			throw new NotFoundException(__('Invalid credential'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Credential->save($this->request->data)) {
				$this->Session->setFlash(__('The credential has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The credential could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Credential.' . $this->Credential->primaryKey => $id));
			$this->request->data = $this->Credential->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Credential->id = $id;
		if (!$this->Credential->exists()) {
			throw new NotFoundException(__('Invalid credential'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Credential->delete()) {
			$this->Session->setFlash(__('The credential has been deleted.'));
		} else {
			$this->Session->setFlash(__('The credential could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
