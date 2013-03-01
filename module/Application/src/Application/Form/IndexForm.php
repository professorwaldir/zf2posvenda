<?php

namespace Application\Form;

use Zend\Form\Form;

class IndexForm extends Form {

    public function __construct($name = null) {

        parent::__construct('index');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name' => 'os',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Número da OS',
            ),
        ));
        $this->add(array(
            'name' => 'serie',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Numero de série',
            ),
        ));
        $this->add(array(
            'name' => 'nf',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'NF. Compra',
            ),
        ));
        $this->add(array(
            'name' => 'cpf',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'CPF Consumidor',
            ),
        ));
        
        $this->add(array(
            'type' => 'select',
            'name' => 'tipo_os',
            'options' => array(
                'label' => 'Tipo OS',
                'value_options' => array(
                    '0' => 'Todas',
                    '1' => 'Consumidor',
                    '2' => 'Revenda',
                ),
            )
        ));
        $this->add(array(
            'type' => 'select',
            'name' => 'tipo_atendimento',
            'options' => array(
                'label' => 'Tipo Atendimento',
                'value_options' => array(
                    '0' => 'Atendimento balcão',
                    '1' => 'Atendimento com deslocamento',
                ),
            )
        ));
        $this->add(array(
            'type' => 'select',
            'name' => 'status_os',
            'options' => array(
                'label' => 'Status de OS',
                'value_options' => array(
                    '0' => 'Aberta Call-Center',
                    '1' => 'Aguardando Análise',
                    '2' => 'Aguardando Peça',
                    '3' => 'Aguardando Conserto',
                    '4' => 'Aguardando Retirada',
                    '5' => 'Aguardando Finalizada',
                ),
            )
        ));
        $this->add(array(
            'name' => 'submit_1',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Pesquisar',
                'id' => 'submitbutton',
            ),
        ));
    }

}

?>
