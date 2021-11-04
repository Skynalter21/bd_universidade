import CreateForm from '../helper/CreateForm.js';
import init from '../init.js';

init(function() {
    const createForm = new CreateForm('professor-creation-form');
    const updateForm = new CreateForm('professor-updating-form');
}, 'professor-create');