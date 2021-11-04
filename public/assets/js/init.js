const init = (callback, name = 'page') => {
    window.addEventListener('load', function(e) {
        callback();
        console.log(`initing: ${name}...`);
    })
}
export default init;