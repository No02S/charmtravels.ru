<?php

namespace app\services;

class ServicesService
{
    public function get_prices(): array
    {
        return [
            "prices" => [
                [
                    "title" => "Консультация",
                    "text" => "Поможем определиться с направлением",
                    "price" => "0 ₽",
                    "isSub" => false
                ],
                [
                    "title" => "Подбор и бронирование пакетного тура",
                    "text" => "Предложим варианты, исходя из ваших пожеланий",
                    "price" => "0 ₽",
                    "isSub" => false
                ],
                [
                    "title" => "Подбор и бронирование отдельно проживания",
                    "text" => "Подберем варианты размещения по России и зарубежом",
                    "price" => "0 ₽",
                    "isSub" => false
                ],
                [
                    "title" => "Подбор и бронирование экскурсионного тура",
                    "text" => "Найдем для вас экскурсионный тур",
                    "price" => "0 ₽",
                    "isSub" => false
                ],
                [
                    "title" => "Тревел Брокер",
                    "text" => "Вы присылаете предложение, которое нашли - мы даем цену ниже",
                    "price" => "0 ₽",
                    "isSub" => false
                ],
                [
                    "title" => "Круизы",
                    "text" => "Подберем и организуем для вас круизное путешествие",
                    "price" => "0 ₽",
                    "isSub" => false
                ],
                [
                    "title" => "Составление сложного индивидульного маршрута",
                    "text" => "Если вы хотите совместить несколько стран в одной поездке, или несколько курортов, но таких пакетных туров нет - мы можем составить вам его индивидуально под вас",
                    "price" => "2000 ₽",
                    "isSub" => true
                ]
            ],
            "inPrices" => [
                "Перелет",
                "Трансфер аэропорт - отель - аэропорт",
                "Проживание в отеле",
                "Питание по выбранной системе",
                "Мед. страховка",
                "Полное сопровождение во время всего путешествия",
            ]
        ];
    }

    public function get_cruises(): array
    {
        return [
            "title" => "Круизы самый возвращаемый вид отдыха. Попробовав, вы захотите еще!",
            "text" => "Преимущества:
                <br/> - как по России, так и по загранице;
                <br/> - посещение нескольких стран за одну поездку;
                <br/> - не устаете от дороги между точками поездки;
                <br/> - лайнер, как отель, со всеми удобствами и развлечениями;
                <br/> - маршруты разной сложности: от однодневных речных/морских до кругосветного путешествия на полгода.",
            "price" => "от 90 000 ₽",
            "image" => "/services/cruises/cruises.jpg"
        ];
    }

    public function get_tours(): array
    {
        return [
            "top" => [
                [
                    "title" => 'Турция',
                    "text" => 'Отдых на любой вкус и кошелек',
                    "price" => 'от 80 000 ₽',
                    "image"=>'/services/tours/turkey.png'
                ],
                [
                    "title" => 'Египет',
                    "text" => 'Древнейшее культурное наследие и превосходный подводный мир Красного моря',
                    "price" => 'от 70 000 ₽',
                    "image"=>'/services/tours/egipt.png'
                ],
                [
                    "title" => 'ОАЭ',
                    "text" => 'Сочетание арабской культуры и новейших технологий',
                    "price" => 'от 65 000 ₽',
                    "image"=>'/services/tours/uas.png'
                ],
                [
                    "title" => 'Мальдивы',
                    "text" => 'Самый возращаемый отдых. Белоснежные пляжи, идеальный океан',
                    "price" => 'от 250 000 ₽',
                    "image"=>'/services/tours/maldivs.png'
                ]
            ],
            "exotic" => [
                [
                    "title" => 'Куба',
                    "text" => 'Зажигательные танцы, колоритная атмосфера и шикарный океан',
                    "price" => 'от 200 000 ₽',
                    "image"=>'/services/tours/kuba.png'
                ],
                [
                    "title" => 'Таиланд',
                    "text" => 'Удивительная природа, уединение, при этом есть и крутые тусовки. Таиланд такой разный',
                    "price" => 'от 160 000 ₽',
                    "image"=>'/services/tours/tai.png'
                ],
                [
                    "title" => 'Шри-Ланка',
                    "text" => 'Пышная растительность, чайные плантации и рай для сёрфинга',
                    "price" => 'от 140 000 ₽',
                    "image"=>'/services/tours/shrilank.png'
                ],
                [
                    "title" => 'Маврикий',
                    "text" => 'Удивительная природа, обилие интересностей, чем можно здесь заняться',
                    "price" => 'от 280 000 ₽',
                    "image"=>'/services/tours/maveric.png'
                ],
                [
                    "title" => 'Сейшелы',
                    "text" => 'Уединение, комфорт и природа',
                    "price" => 'от 215 000 ₽',
                    "image"=>'/services/tours/seishel.png'
                ]
            ],
            "other" => [
                [
                    "title" => 'Шри-Ланка',
                    "text" => 'Пышная растительность, чайные плантации и рай для сёрфинга',
                    "price" => 'от 140 000 ₽',
                    "image"=>'/services/tours/shrilank.png'
                ],
                [
                    "title" => 'Шри-Ланка',
                    "text" => 'Пышная растительность, чайные плантации и рай для сёрфинга',
                    "price" => 'от 140 000 ₽',
                    "image"=>'/services/tours/shrilank.png'
                ],
                [
                    "title" => 'Шри-Ланка',
                    "text" => 'Пышная растительность, чайные плантации и рай для сёрфинга',
                    "price" => 'от 140 000 ₽',
                    "image"=>'/services/tours/shrilank.png'
                ],
            ]
        ];
    }

    public function get_excursions(): array
    {
        return [
            [
                "title" => 'Классический Стамбул 4* 5 дн',
                "price" => 'от 73 900 ₽ за двоих',
                "image" => '/services/excursions/stambul.jpg'
            ],
            [
                "title" => 'Классический Петербург 3 дн',
                "price" => 'от 25 800 ₽ за двоих',
                "image" => '/services/excursions/spb.jpg'
            ],
            [
                "title" => 'Тур по Сеулу (Южная Корея) насыщенный 6 дн',
                "price" => 'от 311 600 ₽ за двоих',
                "image" => '/services/excursions/seul.jpg'
            ],
        ];
    }
}