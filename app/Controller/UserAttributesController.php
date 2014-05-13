<?php
/**
 * User Attribute
 * @author Xuan Ta Thanh.
 *
 */
class UserAttributesController extends AppController {
	
		
	public function index($userId){
		if (isset($userId)){			
			$userAttributes = $this->UserAttribute->find('all', array('conditions' => 
														array('UserAttribute.UserID' => $userId)));
			$this->set('userAttributes', $userAttributes);
			$this->set('userId', $userId);
		} else {
			$this->redirect('/users/index');
		}			
	}	
	
	public function add($userId){
		$this->set('userId', $userId);
		if ($this->request->is('post')){
			$this->request->data['UserAttribute']['Disabled'] = intval($this->request->data['UserAttribute']['Disabled']);
			$this->request->data['UserAttribute']['UserID'] = intval($this->request->params['pass'][0]);
			$this->UserAttribute->set($this->request->data);
			if ($this->UserAttribute->validates()) {
			    $this->UserAttribute->save($this->request->data);
				$this->Session->setFlash(__('User attribute is saved succefully!', true), 'flash_success');
			} else {
			    $this->Session->setFlash(__('User attribute is not saved succefully!', true), 'flash_failure');
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