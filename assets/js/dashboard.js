import LinkCard  from "./class/Link.js";
dashboardMain();
linkSection();

function dashboardMain(){
    const tabButtons = Array.from(document.getElementsByClassName('tab-button'));
    const tabs = Array.from(document.getElementsByClassName('dashboard-tab'));
    
    tabButtons.forEach(ele=>{
        ele.addEventListener('click',()=>{
            switchTabTo(ele.getAttribute('data-tab-number'));
        })
    })

    function switchTabTo(tabNumber = 1){
        tabs.forEach((ele)=>{
            if(tabNumber == ele.getAttribute('data-tab-number')){
                ele.classList.remove('hidden')
            }
            else{
                ele.classList.add('hidden');
            }
        })
    }
}

function linkSection(){
    const addLinkButton = document.querySelector('#add-link-button');
    const addLinkForm = document.getElementById('add-link-form');
    const linkCard = new LinkCard();

    addLinkForm.addEventListener('submit',(e)=>{
        e.preventDefault();
        const formData = new FormData(addLinkForm);
        const cardData = {title:formData.get('title'),
        link:formData.get('link')}
        linkCard.add(cardData); 
        addLinkForm.reset();
        toggleForm();
    })
    addLinkButton.addEventListener('click',()=>{ toggleForm()});
    function toggleForm(){
        addLinkButton.classList.toggle('hidden');
        addLinkForm.classList.toggle('hidden');
    }
}



