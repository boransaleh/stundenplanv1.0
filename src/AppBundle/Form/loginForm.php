<?php
/**
 * Created by PhpStorm.
 * User: boran
 * Date: 30/08/2017
 * Time: 09:29
 */

namespace AppBundle\Form;


use AppBundle\Entity\StandOrt;
use AppBundle\Repository\StandOrtRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;



class loginForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('_username',EmailType::class,['label'=>false,'attr'=>['class'=>'form-control','placeholder'=>'Email']])
            ->add('_password',PasswordType::class,['label'=>false,'attr'=>['class'=>'form-control','placeholder'=>'Passwort']])
            ->add('StandOrt',EntityType::class, [
                'attr'=>['class'=>'form-control selectpicker','data-style'=>"btn-info"],
                'translation_domain'=>false,
                'label'=>false,
                'placeholder' => '-Wählen Sie bitte StandOrt-',
                'class' => StandOrt::class,
                'query_builder' => function(StandOrtRepository $repo) {
                    return $repo->getStandortAlphaQuery();
                }
            ]);
    }


}