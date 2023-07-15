<?php
use App\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PublicationController extends AbstractController
{
    /**
     * @Route("/publication/{id}", name="publication_show")
     */
    public function show(Publication $publication)
    {
        // You can directly access the properties of the $publication object
        $image = $publication->getImage();
        $title = $publication->getTitle();
        $author = $publication->getAuthor();
        $tags = $publication->getTags();
        $date = $publication->getDate();
        $readingTime = $publication->getReadingTime();
        // ...

        return $this->render('publication/show.html.twig', [
            'publication' => $publication,
            'image' => $image,
            'title' => $title,
            'author' => $author,
            'tags' => $tags,
            'date' => $date,
            'readingTime' => $readingTime,
            // ...
        ]);
    }
}
