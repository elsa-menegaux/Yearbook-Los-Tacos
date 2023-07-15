<?php

use App\Entity\Profile;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/{id}", name="profile_show")
     */
    public function show(Profile $profile)
    {
        // You can directly access the properties of the $profile object
        $name = $profile->getName();
        $tag = $profile->getTag();
        $bio = $profile->getBio();
        $picture = $profile->getPicture();
        $relatedArticles = $profile->getRelatedArticles();
        $links = $profile->getLinks();
        // ...?

        return $this->render('profile/show.html.twig', [
            'profile' => $profile,
            'name' => $name,
            'tag' => $tag,
            'bio' => $bio,
            'picture' => $picture,
            'relatedArticles' => $relatedArticles,
            'links' => $links,
            // ...
        ]);
    }
}
