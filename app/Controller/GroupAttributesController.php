<?php
/**
 * Group Attribute
 * @author Xuan Ta Thanh.
 *
 */
class GroupAttributesController extends AppController {
	
		
	public function index($groupId){
		if (isset($groupId)){			
			$groupAttributes = $this->GroupAttribute->find('all', array('conditions' => 
														array('GroupAttribute.GroupID' => $groupId)));
			$this->set('groupAttributes', $groupAttributes);
			$this->set('groupId', $groupId);
		} else {
			$this->redirect('/users/index');
		}			
	}	
	
	public function add($groupId){
		$this->set('groupId', $groupId);
		if ($this->request->is('post')){
			$this->request->data['GroupAttribute']['Disabled'] = intval($this->request->data['GroupAttribute']['Disabled']);
			$this->request->data['GroupAttribute']['GroupID'] = intval($this->request->params['pass'][0]);
			$this->GroupAttribute->set($this->request->data);
			if ($this->GroupAttribute->validates()) {
			    $this->GroupAttribute->save($this->request->data);
				$this->Session->setFlash(__('Group attribute is saved succefully!', true), 'flash_success');
			} else {
			    $this->Session->setFlash(__('Group attribute is not saved succefully!', true), 'flash_failure');
			}
		}	
	}
	
	
	public function edit($id, $userId){
		$userAttribute = $this->UserAttribute->findById($id);
		$this->set('userAttribute', $userAttribute);
		if ($this->request->is('post')){
			$this->request->data['UserAttribute']['Disabled'] = intval($this->request->data['UserAttribute']['Disabled']);
			$this->UserAttribute->set($this->request->data);
			if ($this->UserAttribute->validates()) {
				$this->UserAttribute->id = $id;
			    $this->UserAttribute->save($this->request->data);
				$this->Session->setFlash(__('Attribute is saved succefully!', true), 'flash_success');
			} else {
			    $this->Session->setFlash(__('Attribute is not saved succefully!', true), 'flash_failure');
			}
		}
	}
	
	public function remove($id, $userId){
		if (isset($id)){
			if($this->UserAttribute->delete($id)){
				$this->redirect('/user_attributes/index/'.$userId);
				$this->Session->setFlash(__('User is removed succefully!', true), 'flash_success');
			} else {
				$this->Session->setFlash(__('User is not removed succefully!', true), 'flash_failure');
			}
		} else {
			$this->redirect('/user_attributes/index'.$userId);
		}
	}
	
	public function attribute($id){
		if ($this->request->is('post')){			
			$this->request->data['UserAttribute'] = $this->request->data['User'];
			$this->UserAttribute->set($this->request->data);
			if ($this->UserAttribute->validates()) {
			    $this->UserAttribute->save($this->request->data);
				$this->Session->setFlash(__('User attribute is saved succefully!', true), 'flash_success');
			} else {
			    $this->Session->setFlash(__('User attribute is not saved succefully!', true), 'flash_failure');
			}
		}
	}
}