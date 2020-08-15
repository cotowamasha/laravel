import routes from './routes'

export default function () {
    let args = Array.prototype.slice.call(arguments);

    let name = args.shift();

    if (routes[name] === undefined) {
        console.log('Error');
    } else {
        return '/' + routes[name].split('/').map(str => str[0] == '{' ? args.shift() : str). join('/');
    }
}
