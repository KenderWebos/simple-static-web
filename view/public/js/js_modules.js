

function search_youtube()
{
    query = document.getElementById("mainSearch").value;
    var url = "https://www.youtube.com/results?search_query=" + query; //+ "&max-results=1&v=2&alt=jsonc"

    window.open(url);
    document.getElementById("mainSearch").value = "";
}