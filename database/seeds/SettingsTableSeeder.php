<?php

    use Illuminate\Database\Seeder;
    use Terranet\Options\Option;

    class SettingsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */

        public function run()
        {
            $settings = Option::all()->pluck('key')->toArray();
            foreach ($this->getConfig() as $config) {
                if (!in_array($config['key'], $settings)) {
                    Option::create($config);
                }
            }

        }

        private function getConfig()
        {
            return [
                [
                    'group' => 'general',
                    'key'   => 'nom_site',
                    'value' => 'Nom du site',
                ],
                [
                    'group' => 'general',
                    'key'   => 'societe',
                    'value' => 'La Société',

                ],
                [
                    'group' => 'adresse',
                    'key'   => 'line_1',
                    'value' => '',
                ],
                [
                    'group' => 'adresse',
                    'key'   => 'ligne_2',
                    'value' => '',
                ],
                [
                    'group' => 'adresse',
                    'key'   => 'cp',
                    'value' => '97200',
                ],
                [
                    'group' => 'adresse',
                    'key'   => 'ville',
                    'value' => 'Fort-de-france',
                ],
                [
                    'group' => 'general',
                    'key'   => 'telephone',
                    'value' => '0696 00 00 00',
                ],
                [
                    'group' => 'general',
                    'key'   => 'telephone_secondaire',
                    'value' => '0696 00 00 00',
                ],
                [
                    'group' => 'general',
                    'key'   => 'contact_email',
                    'value' => 'contact@webplusm.net',
                ],

                [
                    'group' => 'general',
                    'key'   => 'siret',
                    'value' => '000 0000 000 000',
                ],
                [
                    'group' => 'general',
                    'key'   => 'facebook',
                    'value' => 'https://www.facebook.com/',
                ],
                [
                    'group' => 'general',
                    'key'   => 'instagram',
                    'value' => 'https://www.instagram.com/',
                ],
                [
                    'group' => 'horaires',
                    'key'   => 'horaires_1',
                    'value' => 'Lun - Mer - Ven : 08:00 - 14:00',
                ],
                [
                    'group' => 'horaires',
                    'key'   => 'horaires_2',
                    'value' => 'Mar - Jeu : 08:00 - 13:00',
                ],
            ];
        }

    }
