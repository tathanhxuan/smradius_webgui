<?php
class GroupsController extends AppController {
	
	public function index(){
		$this->Group->recursive = -1;
		$groups = $this->Group->find('all');
		$this->set('groups', $groups);
	}
	
	public function add(){
		if ($this->request->is('post')){
			$this->Group->set($this->request->data);
			if ($this->Group->validates()) {
			    $this->Group->save($this->request->data);
				$this->Session->setFlash(__('Group is saved succefully!', true), 'flash_success');
			} else {
			    $this->Session->setFlash(__('Group is not saved succefully!', true), 'flash_failure');
			}
		}	
	}
	
	public function edit($id){
		$group = $this->Group->findById($id);
		$this->set('group', $group);
		if ($this->request->is('post')){
			$this->Group->set($this->request->data);
			if ($this->Group->validates()) {
				$this->Group->id = $id;
			    $this->Group->save($this->request->data);
				$this->Session->setFlash(__('Group is edited succefully!', true), 'flash_success');
			} else {
			    $this->Session->setFlash(__('Group is not edited succefully!', true), 'flash_failure');
			}
		}
	}
	
	public function remove($id){
		if($this->Group->delete($id)){
			$this->redirect('/groups/index');
			$this->Session->setFlash(__('Group is removed succefully!', true), 'flash_success');
		} else {
			$this->Session->setFlash(__('Group is not removed succefully!', true), 'flash_failure');
		}
	}
}