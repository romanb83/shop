window.addEventListener('DOMContentLoaded', function () {

    'use strict';

    console.log('hello!');

    const urlRegion = '/regions',
          urlCity = '/cities';

    let searchForm = document.querySelector('#search-form'),
        countries = document.getElementById('country'),
        region = document.getElementById('region'),
        city = document.getElementById('city');

    // const data = new FormData(searchForm);
    // // const values = Object.fromEntries(data.entries);

    // // console.log(values);

    // // console.log(searchForm);
    // // data.append("firstName", "John");
    // // console.log(data.has("region"));
    // console.log(data);

    // let response = fetch(urlRegion, {
    //     method: 'POST',
    //     headers: 'Content-Type: form/multipart',
    //     body: data,
    // });

    // console.log(response);
    
    countries.addEventListener('change', () => {
        let request = new XMLHttpRequest();
        let dataCountry = {[countries.name]: countries.value};
        let data = new FormData(searchForm);

        for (let pair of data.entries()) {          //
            console.log(pair[0]+ ', ' + pair[1]);   //   Показывает объект FormData
        }                                           //
        

        request.open('POST', urlRegion);
        // request.setRequestHeader('Content-type', 'application/json; charset=utf-8');
        request.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
        request.send(data);
        

        request.addEventListener('readystatechange', function () {
            if (request.readyState === 4 && request.status == 200) {
                let response = request.response;
                console.log(response);
                console.log(request.status);
            }
        });
    });

    // console.log(countries);
    // console.log(region);
    // console.log(city);

})
