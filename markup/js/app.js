const a = 1
let b = 10
const str = 'Товар ' + a

b = a + 4

const array = [1, 2, 3, 'Товар 4']

const user = {
    name: 'Иван',
    age: 25,
    languages: ['ru', 'en'],

    isLanguage(searchLang) {
        return this.languages.indexOf(searchLang) !== -1
    }
}

const product = {
    id: 1,
    name: 'Часы orient',
    price: 10000,
    oldPrice: 15000,
    image: ''
}

const list = [
    product,
    product,
    product,
    product
];

const isLanguage = function (array, searchLang) {
    return array.indexOf(searchLang) !== -1
}

const isLanguage2 = (array, searchLang) => {
    return array.indexOf(searchLang) !== -1
}

const isLanguage3 = (array, searchLang) => array.indexOf(searchLang) !== -1

array.map((item) => item * 2)