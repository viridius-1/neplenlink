export default class LinkCard {
    _links = [];
    _id = 0;
    cardContainer;

    constructor() {
        this.cardContainer = document.getElementById('card-container');
        this.emulatorContainer =  document.getElementById('emulator-container')
    }
    add(data = {
        link: '',
        title: ''
    }) {
        data.id = this._id;
        this._id++;
        this._links.push(data);
        this.refreshUI()
    }
    refreshUI() {
        const getCardTemplate = (cardData = {
            link: '',
            title: ''
        }) => {
            return `<li data-id="${cardData.id}" class="link-card p-5 w-full bg-white shadow-sm flex justify-between items-end rounded-xl"> 
            <div class="flex flex-col">
               <span class="text-lg font-semibold flex  items-center gap-3 text-gray-800 cursor-pointer">
               <p>${cardData.title}</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
               stroke="currentColor" class="w-5 h-5">
               <path stroke-linecap="round" stroke-linejoin="round"
                  d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
            </svg>
            </span>

            <span class="text-base flex  items-center gap-3 text-gray-700 cursor-pointer">
            <p>${cardData.link}</p>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round"
                     d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
               </svg>

            </span> 
            </div>
            <div class="flex flex-col">
               <button id="delete-button" class="text-red-600 hover:text-red-700 p-1 rounded-lgom hover:bg-red-50">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                   </svg>                            
               </button>
            </div>
         </li>`
        }
        killChildren(this.cardContainer);
        this._links.forEach(ele => {
            const card = stringToHtml(getCardTemplate(ele));
            this.cardContainer.append(card);
        })
        this.addEmulator();

        //adds event listener to delete button

        const cards = Array.from(this.cardContainer.getElementsByClassName('link-card'));
        cards.forEach(ele => {
            const id = ele.getAttribute('data-id');
            const deleteButton = ele.querySelector('#delete-button');
            deleteButton.addEventListener('click', () => {
                this.deleteLink(id);
            })
        })
        
    }

    addEmulator() {
        const getemulatorTemplate = (cardData = {
            link: '',
            title: ''
        }) => {
            return `<div class="py-2">
            <a href="${cardData.link}">${cardData.title}</a>
         </div>`
        }
        killChildren(this.emulatorContainer);
        this._links.forEach(ele => {
            const emu_link = stringToHtml(getemulatorTemplate(ele));
            this.emulatorContainer.append(emu_link);
        })
    }

    deleteLink(id) {
        const index = this._links.findIndex((ele) => (ele.id == id));
        this._links.splice(index, 1);
        this.refreshUI();
    }
}

function stringToHtml(string) {
    const container = document.createElement('div');
    container.innerHTML = string;
    console.log(container.firstChild, string);
    return container.firstChild;
}

function killChildren(parent) {
    let lastChild = parent.lastElementChild;
    while (lastChild) {
        parent.removeChild(lastChild);
        lastChild = parent.lastElementChild;
    }

}