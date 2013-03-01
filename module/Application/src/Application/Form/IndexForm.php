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
            'type' => 'select',
            'name' => 'linha',
            'options' => array(
                'label' => 'Linha',
                'value_options' => array(
                    '0' => 'Climatizão',
                    '1' => 'Eletrônico',
                ),
            )
        ));
        $this->add(array(
            'type' => 'select',
            'name' => 'familia',
            'options' => array(
                'label' => 'Familia',
                'value_options' => array(
                    '0' => 'Impressora',
                    '1' => 'Máquina de costura',
                ),
            )
        ));
        $this->add(array(
            'name' => 'data_inicial',
            'attributes' => array(
                'type'   => 'text',
                'class'  => 'datepicker',
            ),
            'options' => array(
                'label' => 'Data Inicial',
            ),
        ));
        $this->add(array(
            'name' => 'data_final',
            'attributes' => array(
                'type' => 'text',
                'class'  => 'datepicker',
            ),
            'options' => array(
                'label' => 'Data Final',
            ),
        ));
        $this->add(array(
            'name' => 'os_aberta',
            'type' => 'checkbox',
            'options' => array(
                'label' => 'Apenas OS em aberto',
            ),
        ));
        $this->add(array(
            'name' => 'os_nao_atendida',
            'type' => 'checkbox',
            'options' => array(
                'label' => 'Apenas OS não atendida',
            ),
        ));
        $this->add(array(
            'name' => 'posto',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Posto',
            ),
        ));
        
        $this->add(array(
            'name' => 'nome_posto',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Nome Posto',
            ),
        ));
        $this->add(array(
            'name' => 'nome_consumidor',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Nome do Consumidor',
            ),
        ));
        $this->add(array(
            'name' => 'produto',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Produtos',
            ),
        ));
        
        $this->add(array(
            'name' => 'descr_produto',
            'attributes' => array(
                'type' => 'text',
            ),
            'options' => array(
                'label' => 'Descrição dos produtos',
            ),
        ));
        
        $this->add(array(
            'name' => 'submit_1',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Pesquisar',
                'id' => 'submitbutton',
                'class' => 'btn btn-primary'
            ),
        ));
    }

}

?>
