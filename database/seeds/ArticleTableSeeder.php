<?php

    use App\Models\Article;
    use Illuminate\Database\Seeder;

    class ArticleTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            foreach ($this->getPages() as $page) {

                $article = Article::where('nom', $page['nom'])->first();
                if (!$article)
                    Article::create($page);
            }
        }

        protected function getPages()
        {
            return [
                [
                    'titre'   => 'Accueil',
                    'nom'     => 'Accueil',
                    'slug'    => 'accueil',
                    'type'    => Article::TYPE_PAGE,
                    'etat'    => Article::ETAT_PUBLIE,
                    'texte'   => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur et explicabo minima mollitia numquam, quae quod
                                    saepe sed sunt. Commodi corporis illum in maxime minus modi praesentium quis soluta!
                                </p>
                                <p>A animi atque autem consectetur eligendi eveniet expedita ipsam iusto praesentium quaerat quam, recusandae repellat
                                    tempore. A alias consequatur cum ea eaque ex fugit, minima, pariatur praesentium repellendus tempora, unde.
                    </p>",
                ],
                [
                    'titre'   => 'Prestations',
                    'nom'     => 'Prestations',
                    'slug'    => 'prestations',
                    'type'    => Article::TYPE_PAGE,
                    'etat'    => Article::ETAT_PUBLIE,
                    'texte'   => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur et explicabo minima mollitia numquam, quae quod
                                    saepe sed sunt. Commodi corporis illum in maxime minus modi praesentium quis soluta!
                                </p>
                                <p>A animi atque autem consectetur eligendi eveniet expedita ipsam iusto praesentium quaerat quam, recusandae repellat
                                    tempore. A alias consequatur cum ea eaque ex fugit, minima, pariatur praesentium repellendus tempora, unde.
                    </p>",
                ],
                [
                    'titre'   => "Qui suis-je",
                    'nom'     => "Qui suis-je",
                    'slug'    => "qui-suis-je",
                    'type'    => Article::TYPE_PAGE,
                    'etat'    => Article::ETAT_PUBLIE,
                    'texte'   => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur et explicabo minima mollitia numquam, quae quod
                                    saepe sed sunt. Commodi corporis illum in maxime minus modi praesentium quis soluta!
                                </p>
                                <p>A animi atque autem consectetur eligendi eveniet expedita ipsam iusto praesentium quaerat quam, recusandae repellat
                                    tempore. A alias consequatur cum ea eaque ex fugit, minima, pariatur praesentium repellendus tempora, unde.
                    </p>",
                ],
                [
                    'titre'   => "Contacter",
                    'nom'     => "Nous contacter",
                    'slug'    => "nous-contacter",
                    'type'    => Article::TYPE_PAGE,
                    'etat'    => Article::ETAT_PUBLIE,
                    'texte'   => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur et explicabo minima mollitia numquam, quae quod
                                    saepe sed sunt. Commodi corporis illum in maxime minus modi praesentium quis soluta!
                                </p>
                                <p>A animi atque autem consectetur eligendi eveniet expedita ipsam iusto praesentium quaerat quam, recusandae repellat
                                    tempore. A alias consequatur cum ea eaque ex fugit, minima, pariatur praesentium repellendus tempora, unde.
                    </p>",
                ],
                [
                    'titre'   => "Mentions légales",
                    'nom'     => "Mentions légales",
                    'slug'    => "mentions-legales",
                    'type'    => Article::TYPE_PAGE,
                    'etat'    => Article::ETAT_PUBLIE,
                    'texte'   => "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A consectetur et explicabo minima mollitia numquam, quae quod
                                    saepe sed sunt. Commodi corporis illum in maxime minus modi praesentium quis soluta!
                                </p>
                                <p>A animi atque autem consectetur eligendi eveniet expedita ipsam iusto praesentium quaerat quam, recusandae repellat
                                    tempore. A alias consequatur cum ea eaque ex fugit, minima, pariatur praesentium repellendus tempora, unde.
                   </p>",
                ],
            ];
        }
    }
