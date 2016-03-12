<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GaleriasImgs Controller
 *
 * @property \App\Model\Table\GaleriasImgsTable $GaleriasImgs
 */
class GaleriasImgsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Galerias']
        ];
        $galeriasImgs = $this->paginate($this->GaleriasImgs);

        $this->set(compact('galeriasImgs'));
        $this->set('_serialize', ['galeriasImgs']);
    }

    /**
     * View method
     *
     * @param string|null $id Galerias Img id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galeriasImg = $this->GaleriasImgs->get($id, [
            'contain' => ['Galerias']
        ]);

        $this->set('galeriasImg', $galeriasImg);
        $this->set('_serialize', ['galeriasImg']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galeriasImg = $this->GaleriasImgs->newEntity();
        if ($this->request->is('post')) {
            $galeriasImg = $this->GaleriasImgs->patchEntity($galeriasImg, $this->request->data);
            if ($this->GaleriasImgs->save($galeriasImg)) {
                $this->Flash->success(__('The galerias img has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galerias img could not be saved. Please, try again.'));
            }
        }
        $galerias = $this->GaleriasImgs->Galerias->find('list', ['limit' => 200]);
        $this->set(compact('galeriasImg', 'galerias'));
        $this->set('_serialize', ['galeriasImg']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Galerias Img id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galeriasImg = $this->GaleriasImgs->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galeriasImg = $this->GaleriasImgs->patchEntity($galeriasImg, $this->request->data);
            if ($this->GaleriasImgs->save($galeriasImg)) {
                $this->Flash->success(__('The galerias img has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The galerias img could not be saved. Please, try again.'));
            }
        }
        $galerias = $this->GaleriasImgs->Galerias->find('list', ['limit' => 200]);
        $this->set(compact('galeriasImg', 'galerias'));
        $this->set('_serialize', ['galeriasImg']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Galerias Img id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galeriasImg = $this->GaleriasImgs->get($id);
        if ($this->GaleriasImgs->delete($galeriasImg)) {
            $this->Flash->success(__('The galerias img has been deleted.'));
        } else {
            $this->Flash->error(__('The galerias img could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
