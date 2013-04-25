<?php

namespace WPensar\ERPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ColaboradorType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options) 
	{
		$builder->add('nome');
		$builder->add('situacao', 'choice', array(
			'label' => 'Situação',
			'choices' => array(
				1 => 'Ativo',
				0 => 'Inativo'
			)
		));
		$builder->add('cpf', null, array(
			'label' => 'CPF'
		));
		$builder->add('rg', null, array(
			'label' => 'RG'
		));
		$builder->add('orgao_expedidor', null, array(
			'label' => 'Orgão Expedidor'
		));
		$builder->add('data_emissao', 'date', array(
			'label' => 'Data de Emissão',
			'required' => false,
			'format' => 'dd/MM/yyyy'
		));
		$builder->add('data_nascimento', 'birthday', array(
			'label' => 'Data de Nascimento',
			'required' => false,
			'format' => 'dd/MM/yyyy'
		));
		$builder->add('sexo', 'choice', array(
			'choices' => array('m' => 'Masculino', 'f' => 'Feminino'),
			'required' => false
		));
		$builder->add('estado_civil', 'choice', array(
			'label' => 'Estado Civil',
			'choices' => array(
				1 => 'Solteiro', 
				2 => 'Casado'
			),
			'required' => false
		));
		$builder->add('celular');
		$builder->add('telefone');
		$builder->add('email', 'email');
	}
	
	public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WPensar\ERPBundle\Entity\Colaborador',
        ));
    }
	
	public function getName() 
	{
		return 'colaborador';
	}	
}