# Gyuto
### Web app for a film documentary by Filipa Cardoso.
![img](http://www.gyuto-movie.com/images/synopsis-image.jpg)

> « To hear the sound of the ocean in the Himalayas… This unlikely wish takes a film director and her three curious girls to Gyuto, a Tibetan Buddhist monastery echoing day and night the sacred tantric chants of meditation, which the monks say, “sound like the waves of the ocean" » 

## Config
- NPM version 6.4
- PHP version 7.2
- LARAVEL 5.6
- SASS : ```node-sass style.scss style.css -w```

## Architecture
![architecture](architecture.png)

## Mockup
![desktop](desktop.png)
- [Desktop](https://xd.adobe.com/view/d3ba2b44-66c5-4626-4281-8233dd7db86c-a58b/?fullscreen)

## Team
- Back-end [Liliane Mamane](https://github.com/lilama)
- Full Stack [Geoffrey Poelmans](https://github.com/geoffrey-poelmans)
- Front-end [Baptiste Firket](https://github.com/baptistefkt)
- UX/UI [Pedro Seromenho](http://pedroseromenho.com/)


## Back-end
```
export const login = [{
    user: "",
    password: ""
}],

export const videos = [
    {
        id: "",
        title: [{
            fr: "",
            en: "",
        }],
        type: "",
        quote: [{
            fr: "",
            en: "",
        }],
        legend: [{
            fr: "",
            en: "",
        }],
        url: "",
        gif: "",
        duration: ""
    }
]

export const events = [
    {
        id: "",
        title: [{
            fr: "",
            en: "",
        }],
        date: "",
        hour: "",
        place: "",
        description: [{
            fr: "",
            en: "",
        }],
        url: "",
    }
]

export const images = [
    {
        id: "",
        title: [{
            fr: "",
            en: "",
        }],
        date: "",
        cover: "",
        images: [{
            description: [{
                fr: "",
                en: "",
            }],
            files: [""]

        }],
    }
]

export const musique = [
    {
        video_url: "",
        title: [{
            fr: "",
            en: "",
        }],
        description: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }],
        musiques: [{
            id: "",
            title: "",
            file: ""
        }],
        albums: [{
            id: "",
            image: "",
            url_order: ""
        }],
    }
]

export const info = [
    {
        synopsis: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }],
        projet_genesis: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }],
        note_of_intent: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }],
        note_of_production: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
            proximity: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
            }],
            buddhism: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
                dharma: [{
                    images: [""],
                    text: [{
                        fr: "",
                        en: "",
                    }],
                }],
                sangha: [{
                    images: [""],
                    text: [{
                        fr: "",
                        en: "",
                    }],
                }],
                impermanence: [{
                    images: [""],
                    text: [{
                        fr: "",
                        en: "",
                    }],
                }],
                dalai_lama: [{
                    images: [""],
                    text: [{
                        fr: "",
                        en: "",
                    }],
                }]
            }],
            sound_of_gyuto: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
            }],
            parables: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
            }],
            girls_notebooks: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
            }],
            gestures_of_rituals: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
            }],
            characters: [{
                images: [""],
                text: [{
                    fr: "",
                    en: "",
                }],
            }]
        }],
        place_description: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }],
        cv: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }],
        credits: [{
            images: [""],
            text: [{
                fr: "",
                en: "",
            }],
        }]
    }
]
````



## Technologies
- Laravel
- React JS
- SASS
- Adobe XD
- Git

## Typeface
- Begum, by [Indian type foundry](https://www.indiantypefoundry.com/fonts/begum)

##### With :heart: from us, at [becode]() oct-nov 2018.




