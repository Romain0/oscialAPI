<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class Utilisateur1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('utilisateurNom')
            ->add('utilisateurPrenom')
            ->add('utilisateurDateNaissance')
            ->add('utilisateurAdressePostale')
            ->add('utilisateurAdresseComplementaire')
            ->add('utilisateurCodePostal')
            ->add('utilisateurVille')
            ->add('utilisateurSexe')
            ->add('utilisateurLoisirs')
            ->add('utilisateurTelephone')
            ->add('utilisateurImgProfil')
            ->add('utilisateurPossedePermis')
            ->add('utilisateurPossedeVehicule')
            ->add('idMessage')
            ->add('idFormation')
            ->add('idUtilisateur1')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
