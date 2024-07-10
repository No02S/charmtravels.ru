<?php

namespace app\controllers;

class CompanyController extends Runner
{
    /**
     * Action все блоки 'компании'
     *
     * @return void
     */
    protected function getCompanyInfo()
    {
        $response = ["content" => [
            "team" => $this->get_team(),
            "advantages" => $this->get_advantages(),
            "stages"=>$this->get_stages()
        ]];

        exit(json_encode($response));
    }

    /**
     * Action блока 'этапы работы'
     *
     * @return void
     */
    protected function getStages(): void
    {
        exit(json_encode(["content" => $this->get_stages()]));
    }

    /**
     * Получение блока 'этапы работы'
     *
     * @return array
     */
    function get_stages(): array
    {
        return [
            [

                "title" => "Консультация",
                "text" => "Определяемся со страной, курортом. Менеджер узнает ваши пожелания по отдыху."
            ],
            [

                "title" => "Подбор вариантов",
                "text" => "Исходя из ваших пожеланий, менеджер подбирает 3-5 вариантов и скидывает на What`sApp. <br> Обговаривается время следующего общения."
            ],
            [

                "title" => "Обсуждение вариантов",
                "text" => "Менеджер отвечает на интересующие вопросы по отелям, курортам. <br> Если варианты не подошли - находим еще предложения."
            ],
            [

                "title" => "Бронирование",
                "text" => "Скидываете паспорта, предоплату или полную оплату (в зависимости от дат тура). <br> Подписывается договор о реализации туристского продукта. Менеджер бронирует тур."
            ],
            [

                "title" => "Консультация до вылета",
                "text" => "Выдача полетных документов / ваучера. Менеджер отвечает на ваши вопросы. Рассказывает фишки для более комфортного отдыха."
            ],
            [

                "title" => "В поездке",
                "text" => "Если возникают вопросы на отдыхе - решаем. Спрашиваем о ваших впечатлениях. <br> Просим отмечать нас в соцсетях. <br> Замечательно, если вы сможете прям из поездки заснять видео-отзыв для нас."
            ],
            [

                "title" => "Отзыв",
                "text" => "После поездки просим вас написать отзыв о поездке, отеле и работе менеджера. Конечно, лучше всего с фото и видео с отдыха."
            ]
        ];
    }

    /**
     * Action блока 'преимущества'
     *
     * @return void
     */
    protected function getAdvantages(): void
    {
        exit(json_encode(["content" => $this->get_advantages()]));
    }

    /**
     * Получение блока 'преимущества'
     *
     * @return array
     */
    function get_advantages(): array
    {
        return [
            [
                "title" => "Можете купить у нас тур из любой точки РФ",
                "text" => "Вне зависимости от вашего месторасположения, вы можете приобрести тур онлайн."
            ],
            [
                "title" => "Не надо тратить время на дорогу в офис",
                "text" => "Не нужно тратить свой выходной или вечер после работы на то, чтобы приехать в офис. Всё может быть полностью дистанционно."
            ],
            [
                "title" => "Мыслим шире",
                "text" => "Не боимся браться за организацию сложных маршрутов под ваши индивидуальные потребности.<br>
                           Даже в Египте можем составить необычный маршрут. Например, мало кто знал, что там есть филиал Мальдив на средиземноморском побережье. Об этом расскажем на консультации."
            ],
        ];
    }

    /**
     * Action блок 'команда'
     *
     * @return void
     */
    protected function getTeam(): void
    {
        exit(json_encode(["content" => $this->get_team()]));
    }

    /**
     * Запрос на получение блока 'команда'
     *
     * @return array
     * */
    function get_team(): array
    {
        return [
            [
                "name" => "Стародубцева Софья",
                "titles" => ["Директор CHARM TRAVEL"],
                "description" => "Всегда находит для вас уникальные места, о которых мало кто знает. Очень любит необычные направления.<br>Искренне влюбленная в путешествия. Считает, мир открыт каждому и только опытный турагент, влюбленный в свое дело поможет это осуществить.",
                "image" => "/company/team/sofia_s.png",
                "number" => "+ 7 (999) 111-22-33",
                "mail" => "testl@test.test",
                "wa" => "test",
                "tg" => ""
            ],
            [
                "name" => "Выдай Виктория",
                "titles" => ["Менеджер", "В туризме с 2012 года."],
                "description" => "Знает как совместить качественный отдых и выгодную цену.",
                "image" => "/company/team/vikt_v.png",
                "number" => "",
                "mail" => "test@test.test",
                "wa" => "",
                "tg" => "test"
            ],
            [
                "name" => "Калиниченко Екатерина",
                "titles" => ["Менеджер", "В туризме более 4 лет."],
                "description" => "Путешествует сама и делится знаниями с туристами.",
                "image" => "/company/team/ekat_k.png",
                "number" => "+ 7 (999) 111-22-33",
                "mail" => "testl@test.test",
                "wa" => "test",
                "tg" => "test"
            ],
            [
                "name" => "Пиголкина Наталья",
                "titles" => ["Менеджер"],
                "description" => "Заботится о том, чтобы учесть все ваши пожелания и найдет лучшее, что есть в вашем бюджете.",
                "image" => "/company/team/natal_p.png",
                "number" => "",
                "mail" => "",
                "wa" => "test",
                "tg" => "test"
            ],
            [
                "name" => "Пузыревская Анна",
                "titles" => ["Менеджер", "10 лет в туризме"],
                "description" => "Знает все тонкости организации отдыха с комфортом в любой уголок мира.",
                "image" => "/company/team/anna_p.png",
                "number" => "",
                "mail" => "",
                "wa" => "",
                "tg" => ""
            ],
            [
                "name" => "Стародубцева Софья",
                "titles" => ["Директор CHARM TRAVEL"],
                "description" => "Всегда находит для вас уникальные места, о которых мало кто знает. Очень любит необычные направления.<br>Искренне влюбленная в путешествия. Считает, мир открыт каждому и только опытный турагент, влюбленный в свое дело поможет это осуществить.",
                "image" => "/company/team/sofia_s.png",
                "number" => "",
                "mail" => "",
                "wa" => "",
                "tg" => "test"
            ],
            [
                "name" => "Выдай Виктория",
                "titles" => ["Менеджер", "В туризме с 2012 года."],
                "description" => "Знает как совместить качественный отдых и выгодную цену.",
                "image" => "/company/team/vikt_v.png",
                "number" => "+ 7 (999) 111-22-33",
                "mail" => "testl@test.test",
                "wa" => "",
                "tg" => ""
            ],
            [
                "name" => "Калиниченко Екатерина",
                "titles" => ["Менеджер", "В туризме более 4 лет."],
                "description" => "Путешествует сама и делится знаниями с туристами.",
                "image" => "/company/team/ekat_k.png",
                "number" => "",
                "mail" => "",
                "wa" => "",
                "tg" => "31"
            ],
            [
                "name" => "Пиголкина Наталья",
                "titles" => ["Менеджер"],
                "description" => "Заботится о том, чтобы учесть все ваши пожелания и найдет лучшее, что есть в вашем бюджете.",
                "image" => "/company/team/natal_p.png",
                "number" => "",
                "mail" => "",
                "wa" => "31",
                "tg" => ""
            ],
            [
                "name" => "Пузыревская Анна",
                "titles" => ["Менеджер", "10 лет в туризме"],
                "description" => "Знает все тонкости организации отдыха с комфортом в любой уголок мира.",
                "image" => "/company/team/anna_p.png",
                "number" => "",
                "mail" => "testl@test.test",
                "wa" => "",
                "tg" => ""
            ],
            [
                "name" => "Стародубцева Софья",
                "titles" => ["Директор CHARM TRAVEL"],
                "description" => "Всегда находит для вас уникальные места, о которых мало кто знает. Очень любит необычные направления.<br>Искренне влюбленная в путешествия. Считает, мир открыт каждому и только опытный турагент, влюбленный в свое дело поможет это осуществить.",
                "image" => "/company/team/sofia_s.png",
                "number" => "+ 7 (999) 111-22-33",
                "mail" => "testl@test.test",
                "wa" => "test",
                "tg" => "test"
            ],
            [
                "name" => "Выдай Виктория",
                "titles" => ["Менеджер", "В туризме с 2012 года."],
                "description" => "Знает как совместить качественный отдых и выгодную цену.",
                "image" => "/company/team/vikt_v.png",
                "number" => "+ 7 (999) 111-22-33",
                "mail" => "",
                "wa" => "test",
                "tg" => ""
            ],
            [
                "name" => "Калиниченко Екатерина",
                "titles" => ["Менеджер", "В туризме более 4 лет."],
                "description" => "Путешествует сама и делится знаниями с туристами.",
                "image" => "/company/team/ekat_k.png",
                "number" => "+ 7 (999) 111-22-33",
                "mail" => "",
                "wa" => "",
                "tg" => ""
            ]
        ];
    }
}