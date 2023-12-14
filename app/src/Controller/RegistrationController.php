<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormErrorIterator;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        EntityManagerInterface $entityManager
    ): Response {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setRoles(['ROLE_USER']);
            $entityManager->persist($user);
            $entityManager->flush();
        
            return $this->redirectToRoute('app_home');
        }
        
           // Get RollerworksPassword errors
    $rollerworksErrors = $this->getRollerworksPasswordErrors($form->getErrors(true, true));

    return $this->render('registration/register.html.twig', [
        'registrationForm' => $form->createView(),
        'rollerworksErrors' => $rollerworksErrors,
    ]);
}

/**
 * Extracts RollerworksPassword errors from FormErrorIterator
 *
 * @param FormErrorIterator $errors
 * @return array
 */
private function getRollerworksPasswordErrors(FormErrorIterator $errors): array
{
    $rollerworksErrors = [];

    foreach ($errors as $error) {
        $origin = $error->getOrigin();
        if ($origin) {
            $formConfig = $origin->getConfig();
            $options = $formConfig->getOptions();

            if (isset($options['constraints'])) {
                $constraints = $options['constraints'];

                foreach ($constraints as $constraint) {
                    if ($constraint instanceof \Rollerworks\Component\PasswordStrength\Validator\Constraints\PasswordRequirements) {
                        $rollerworksErrors[$origin->getName()][] = $error->getMessage();
                    }
                }
            }
        }
    }

    return $rollerworksErrors;
}
}
