import Link from "next/link";
import Openmenu from "@/components/header/client/Openmenu";
import Image from "next/image";
import "../header.scss";
import HeaderMover from "@/components/header/client/HeaderMover";
import MobileMenu from "@/components/header/client/MobileMenu";

export default function Header() {

    return (
        <header className={"header"}>
            <div className="container">
                <div className="header__static">
                    <Link href={"/"} style={{display: "contents"}}>
                        <Image
                            src={"/logo/logo.png"}
                            className={"header__static__logo"}
                            alt={"logo"}
                            height={200}
                            width={200}
                            quality={100}
                            priority={true}
                        />
                    </Link>
                    <div className="static__info">
                        <Link href={`tel:${process.env.phone}`}>{process.env.phone}</Link>
                        <h1>{process.env.address}</h1>
                    </div>
                </div>
                <HeaderMover>
                    <div className="header__nav__wrap">
                        <div className={"header__nav__navigation"}>
                            <Link href={"/hot"} className={"static__link hl_after"} data-adapt={'1130'}>Горящие туры</Link>
                            <Link href={"/faq"} className={"static__link hl_after"} data-adapt={'1130'}>Часто задаваемые вопросы</Link>
                            <Link href={"/contacts"} className={"static__link hl_after"} data-adapt={'780'}>Контакты</Link>
                            <div className={"static__link hl_after"}>
                                <Openmenu title={"Услуги"}>
                                    <ul className={"header__nav__open__menu__list"}>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/services#prices"} className={"static__link"}>Цены</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/services#tours"} className={"static__link"}>Туры</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/services#hotels"} className={"static__link"}>Отели</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/services#cruises"} className={"static__link"}>Круизы</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/services#excursions"}
                                                  className={"static__link"}>Экскурсии</Link>
                                        </li>
                                    </ul>
                                </Openmenu>
                            </div>
                            <div className={"static__link hl_after"}>
                                <Openmenu title={"О компании"}>
                                    <ul className={"header__nav__open__menu__list"}>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#about"} className={"static__link"}>О нас</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#team"} className={"static__link"}>Наша команда</Link>

                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#stages"} className={"static__link"}>Этапы нашей
                                                работы</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#advantages"} className={"static__link"}>Наши
                                                преимущества</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#pick"} className={"static__link"}>Почему нас
                                                выбирают</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#reviews"} className={"static__link"}>Отзывы</Link>
                                        </li>
                                        <li className={"header__nav__open__menu__list__item"}>
                                            <Link href={"/company#requisites"}
                                                  className={"static__link"}>Реквизиты</Link>
                                        </li>
                                    </ul>
                                </Openmenu>
                            </div>
                        </div>

                        <div className="header__nav__wrap__buttons">
                            <Link href={process.env.anketa}
                                  target={"_blank"}
                                  className={"static__link_btn static__link"}>
                                Подбор тура
                            </Link>
                            <Link href={process.env.WA} className={"static__link_svg"}>
                                <svg width="29" height="28" viewBox="0 0 29 28" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <rect className="tgo-color" x="0.258667" width="28" height="28" rx="14"
                                          fill="#1d7c79"></rect>
                                    <path
                                        d="M20.8915 17.2746L18.9337 15.3208C18.2345 14.6231 17.0458 14.9022 16.7661 15.8093C16.5563 16.4373 15.8571 16.7862 15.2278 16.6466C13.8293 16.2977 11.9414 14.4835 11.5917 13.0182C11.382 12.3902 11.8015 11.6924 12.4308 11.4831C13.3398 11.204 13.6195 10.0178 12.9203 9.32007L10.9624 7.36633C10.4031 6.87789 9.56397 6.87789 9.07451 7.36633L7.74597 8.69208C6.41742 10.0876 7.88581 13.7858 11.1722 17.0652C14.4586 20.3447 18.1645 21.8798 19.563 20.4843L20.8915 19.1585C21.381 18.6003 21.381 17.763 20.8915 17.2746Z"
                                        fill="white"></path>
                                </svg>
                            </Link>
                            <MobileMenu/>
                        </div>
                    </div>
                </HeaderMover>
            </div>
        </header>
    )
}