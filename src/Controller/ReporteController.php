<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
use Cake\I18n\Time;
use Cake\I18n\Date;

/**
 * Reporte Controller
 *
 *
 * @method \App\Model\Entity\Reporte[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ReporteController extends AppController
{

    /**
    * Autoriza a los usuarios de tipo admin solo a ciertos metodos
    */
    public function isAuthorized($user){
        if(isset($user['role']) && $user['role'] === 'admin'){
            if(in_array($this->request->action, ['index', 'notificaciones', 'ingresos','vehiculos'])){
                return true;
            }
        }

        return parent::isAuthorized($user);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $reporte = $this->paginate(TableRegistry::get('Users')->find('all')->where(['Users.Company_id' => $this->Auth->user('company_id'), 'role !=' => 'sa']));


        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'Usuarios.pdf'
            ]
        ]);

        $this->set(compact('reporte'));
    }


    public function notificaciones()
    {
        $user =TableRegistry::get('users');
        $this->viewBuilder()->options([
                'pdfConfig' => [
                    'orientation' => 'portrait',
                    'filename' => 'notificaciones.pdf'
                ]
            ]);
        if ($this->request->is('post')) {
            
            $fecha = $this->request->getData('registered');
            foreach ($fecha as $f) {
                $mes = $f ;
            }
            $notificacion = TableRegistry::get('Notificacion')->find('all')->contain(['users'])->where(['company_id' => $this->Auth->user('company_id'), 'month(fecha)' => $mes]);

            


            foreach ($notificacion as $noti) {
                $user1[] = $user->get($noti->user_id_origen);
                $user2[] = $user->get($noti->user_id_destino);
            }
        }
            $this->set(compact('notificacion'));
            $this->set(compact('fecha'));
            $this->set(compact('user1'));
            $this->set(compact('user2'));
        
    }



    public function ingresos()
    {
        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'ingresos.pdf'
            ]
        ]);

        if($this->request->is('post')){
            $validador = $this->request->getData('validador');
            $fecha = $this->request->getData('registered');
            foreach ($fecha as $f) {
                $mes = $f ;
            }

            $ingresos = TableRegistry::get('Ingreso')->find('all')->where(['validador' => $validador, 'month(entrada)' => $mes, 'Users.company_id' => $this->Auth->user('company_id')])->contain(['Sucursal','Users']);
            $this->set(compact('ingresos'));
            $this->set(compact('fecha'));
            $this->set(compact('validador'));
        }
        
    }


    public function vehiculos()
    {
        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'vehiculos.pdf'
            ]
        ]);

        $carros = TableRegistry::get('vehiculo')->find('all')->contain(['Users'])->where(['tipo' => 'carro', 'Users.company_id' => $this->Auth->user('company_id')]);
        $motos = TableRegistry::get('vehiculo')->find('all')->contain(['Users'])->where(['tipo' => 'moto', 'Users.company_id' => $this->Auth->user('company_id')]);

        $this->set(compact('carros'));
        $this->set(compact('motos'));
    }











    /**
     * View method
     *
     * @param string|null $id Reporte id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user =TableRegistry::get('users');
        $notificacion = TableRegistry::get('Notificacion')->paginate($this->Notificacion->find('all')->contain(['users'])->where(['company_id' => $this->Auth->user('company_id')]));
        foreach ($notificacion as $noti) {
            $user1[] = $user->get($noti->user_id_origen);
            $user2[] = $user->get($noti->user_id_destino);
        }

        $this->viewBuilder()->options([
            'pdfConfig' => [
                'orientation' => 'portrait',
                'filename' => 'User_' . $id . '.pdf'
            ]
        ]);

        $this->set(compact('notificacion'));
        $this->set(compact('user1'));
        $this->set(compact('user2'));

    }

}
