function hexToRgb(hexCode) {
    var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
    var matches = patt.exec(hexCode);
    var rgb = "rgb(" + parseInt(matches[1], 16) + "," + parseInt(matches[2], 16) + "," + parseInt(matches[3], 16) + ")";
    return rgb;
}

function hexToRgba(hexCode, opacity) {
    var patt = /^#([\da-fA-F]{2})([\da-fA-F]{2})([\da-fA-F]{2})$/;
    var matches = patt.exec(hexCode);
    var rgb = "rgba(" + parseInt(matches[1], 16) + "," + parseInt(matches[2], 16) + "," + parseInt(matches[3], 16) + "," + opacity + ")";
    return rgb;
}

function niceDate(value) {
    if (!value) return ''
      var date = moment(value)

    return date.locale('es').format('DD/MMM/YYYY').replace('.', '')
}

function niceDateTime(value) {
    var date = moment(value)

    return date.locale('es').format('DD/MMM/YYYY hh:mm A').replace('.', '')
}

function niceDuration(value) {
    var fromm = moment.utc()
    var tom = moment.utc(value)
    var d = moment.duration(tom.diff(fromm, 'seconds'), 'seconds')

    if (d.asHours() > 5)
        return d.locale('es').humanize().toUpperCase()

    if (d.asMinutes() >= 60) 
        return moment.utc(tom.diff(fromm)).format('H [H] m [M]')

    return moment.utc(tom.diff(fromm)).format('m [M] s [S]')
}

function shortName(first_name, last_name){
    var notNames = ['de', 'los','la'];
    var shortName = '';

    var temp = (first_name != null) ? first_name.split(' ') : ' ';

    if ( !Array.isArray(temp) )
        return '';

    temp.forEach(function (word) {
        if (shortName.length > 0)
            shortName += ' ';

        shortName += word;

        if ( ! $.inArray(word.toLowerCase(), notNames) )
            return false;
    });

    temp = (last_name != null) ? last_name.split(' ') : ' ';

    temp.forEach(function (word) {
        if (shortName.length > 0)
            shortName += ' ';

        shortName += word;

        if ( ! $.inArray(word.toLowerCase(), notNames) )
            return false;
    });

    return shortName;
}