<?php
App::uses('AppController', 'Controller');
/**
 * Volunteers Controller
 *
 * @property Volunteer $Volunteer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class VolunteersController extends AppController {

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
		$this->Volunteer->recursive = 0;
		$this->set('volunteers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Volunteer->exists($id)) {
			throw new NotFoundException(__('Invalid volunteer'));
		}
		$options = array('conditions' => array('Volunteer.' . $this->Volunteer->primaryKey => $id));
		$this->set('volunteer', $this->Volunteer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Volunteer->create();
			if ($this->Volunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The volunteer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteer could not be saved. Please, try again.'));
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
		if (!$this->Volunteer->exists($id)) {
			throw new NotFoundException(__('Invalid volunteer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Volunteer->save($this->request->data)) {
				$this->Session->setFlash(__('The volunteer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volunteer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Volunteer.' . $this->Volunteer->primaryKey => $id));
			$this->request->data = $this->Volunteer->find('first', $options);
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
		$this->Volunteer->id = $id;
		if (!$this->Volunteer->exists()) {
			throw new NotFoundException(__('Invalid volunteer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Volunteer->delete()) {
			$this->Session->setFlash(__('The volunteer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The volunteer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
