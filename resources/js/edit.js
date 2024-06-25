import './bootstrap';
import Editor from '@toast-ui/editor';
import '@toast-ui/editor/dist/toastui-editor.css';

const editor = new Editor({
    el: document.querySelector('#editor'),
    height: '500px',
    initialEditType: 'markdown',
    previewStyle: 'vertical'
});

const submitForm = document.querySelector('.admin-calcus form');

submitForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const form = new FormData(submitForm);
    const data = {};

    form.append('editor', editor.getMarkdown());

    for (let [name, value] of form) {
        data[name] = value;
    }

    axios.post('./', data)
        .then(result => {
            console.log(result)
        }).catch(error => {
            console.error(error.response.data)
        })
});
