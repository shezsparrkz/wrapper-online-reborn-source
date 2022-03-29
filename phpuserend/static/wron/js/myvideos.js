var json;
var tbody = document.getElementsByTagName('tbody')[0];
var tfoot = document.getElementsByTagName('tfoot')[0];
var loadMore = document.getElementById('load_more');

const listReq = new XMLHttpRequest();
listReq.open('GET', '//localhost:8080/movieList');
listReq.send();

var C = 0;
function loadRows() {
    let c = C; C += 69;
    for (; c < C; c++) {
        if (c > json.length - 1) {
            loadMore.remove();
            break;
        }

        const tbl = json[c];
        const fin = json[c];
        const date = tbl.date.substr(0, 10) + ' ' + tbl.date.substr(11);
			  tbody.insertAdjacentHTML('beforeend',
            '<tr><td><img src="//localhost:8080/movie_thumbs/' + tbl.id + '.png"></td><td><div id="title"><xmp>' + tbl.title.replace(/&/g, "and").replace(/</g, "").replace(/>/g, "") + '</xmp></div><div id="description"><xmp>' + tbl.desc.replace(/&/g, "and").replace(/</g, "").replace(/>/g, "") + '</xmp></div><div><xmp>' + tbl.durationString + '</xmp></div></div></td><td><span>' + date.match(/./g).join('‏‏‎').replace(/Z/g, "") + '</span></td><td><a href="javascript:;" onclick="popup(\'' + tbl.id + '\')"></a><a href="/videomaker?movieId=' + tbl.id + '"></a><a href="/movies/' + tbl.id + '.xml" download="' + tbl.id + '"></a></td></tr>');
    }
}

loadMore.onclick = loadRows;
listReq.onreadystatechange = function (e) {
    if (listReq.readyState != 4) return;
    json = JSON.parse(listReq.responseText);
    loadRows();
}

function popup(id) {
    window.location.href = '/player?movieId=' + id;
}