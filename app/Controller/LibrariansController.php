<?php
App::uses('AppController', 'Controller');
/**
 * Librarians Controller
 *
 * @property Librarian $Librarian
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class LibrariansController extends AppController {

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
		$this->Librarian->recursive = 0;
		$this->set('librarians', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Librarian->exists($id)) {
			throw new NotFoundException(__('Invalid librarian'));
		}
		$options = array('conditions' => array('Librarian.' . $this->Librarian->primaryKey => $id));
		$this->set('librarian', $this->Librarian->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Librarian->create();
			if ($this->Librarian->save($this->request->data)) {
				$this->Session->setFlash(__('The librarian has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The librarian could not be saved. Please, try again.'));
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
		if (!$this->Librarian->exists($id)) {
			throw new NotFoundException(__('Invalid librarian'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Librarian->save($this->request->data)) {
				$this->Session->setFlash(__('The librarian has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The librarian could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Librarian.' . $this->Librarian->primaryKey => $id));
			$this->request->data = $this->Librarian->find('first', $options);
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
		$this->Librarian->id = $id;
		if (!$this->Librarian->exists()) {
			throw new NotFoundException(__('Invalid librarian'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Librarian->delete()) {
			$this->Session->setFlash(__('The librarian has been deleted.'));
		} else {
			$this->Session->setFlash(__('The librarian could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
