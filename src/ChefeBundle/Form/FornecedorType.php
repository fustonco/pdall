<?php

namespace ChefeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FornecedorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('cnpj')
            ->add('cpf')
            ->add('telefone')
            ->add('endereco')
            ->add('ativo')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ChefeBundle\Entity\Fornecedor'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ChefeBundle_fornecedor';
    }
}
