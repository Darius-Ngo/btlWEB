const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

    // Select header
    const placesSelect = $('.toolBar-category_places');
    const PlacesSeclectData = $('.form-places_select');
    const ActivitiesSelect = $('.toolBar-category_activities');
    const DownloadApp = $('.toolBar-category_download');
    const Notificatons = $('.toolBar-notification');
    const NotifiList = $('.form-notifications_list');
    const AddElement = $('.toolBar-add-button');
    const LanguagesSelect = $('.toolBar-languages');
    const LoginBtn = $('.toolBar-account');
    const UserBtn = $('.toolBar-User');

    // function getParent
    function getParent(element, selector) {
        while(element.parentElement) {   // nếu còn phần tử con thì chạy nếu không thì dùng lại
            if(element.parentElement.matches(selector)) {    // matches kiểm tra xem element có trùng với kết quả cần tìm hay k
                return element.parentElement;
            }
            element = element.parentElement;
        }
    }
const header = {
    // array places
    placesData: [
        {
            city: 'TP. HCM',
            number: '175,789'
        },
        {
            city: 'Hà Nội',
            number: '89,325'
        },
        {
            city: 'Đà Nẵng',
            number: '57,323'
        },
        {
            city: 'Khánh Hòa',
            number: '41,434'
        },
        {
            city: 'Hải Phòng',
            number: '21,494'
        },
        {
            city: 'Nha Trang',
            number: '20,124'
        },
        {
            city: 'Cần Thơ',
            number: '18,647'
        },
        {
            city: 'Hải Dương',
            number: '32,877'
        },
        {
            city: 'Thái Bình',
            number: '21,546'
        },
        {
            city: 'Hưng Yên',
            number: '54,542'
        },
        {
            city: 'Hạ Long',
            number: '14,542'
        },
        {
            city: 'Yên Bái',
            number: '14,221'
        },
        {
            city: 'Hà Giang',
            number: '12,142'
        },
        {
            city: 'Vũng Tàu',
            number: '10,543'
        },
        {
            city: 'Tuyên Quang',
            number: '9843'
        },
        {
            city: 'Thanh Hóa',
            number: '8563'
        },
        {
            city: 'Đắk Nắk',
            number: '6942'
        },
    ],

    // array notifications
    notifiData: [
        {
            src: './access/img/header/img-notification/image-1.jpg',
            name: 'Tiệm gà rán ò ó o',
            notification: 'Ròn tan từng miếng, vị tan trong miệng còn đợi chờ gì mà không thử ngay thôi nào.',
            new: 'new-notification',
        },
        {
            src: './access/img/header/img-notification/image-2.jpg',
            name: 'Tiger Sugar - Vũ Trọng Phụng',
            notification: 'Khai chương tiệm mới giảm giá 50% cho mọi loại đồ uống tại cửa hàng.',
            new: '',
        },
        {
            src: './access/img/header/img-notification/image-3.jpeg',
            name: 'Cơm Tấm Anh Ba - Trần Quốc Hoàn',
            notification: 'Cơm tấm đặc sản miền quê, đậm vị thanh bình.',
            new: 'new-notification',
        },
        {
            src: './access/img/header/img-notification/image-4.jpg',
            name: 'Bami Sot - Bánh Mì Đen - Lò Đúc',
            notification: 'Bánh mì nướng bóng đêm mới ra lò đây :))).',
            new: 'new-notification',
        },
        {
            src: './access/img/header/img-notification/image-5.jpg',
            name: 'Anh Bảo - Vịt Quay Kinh Bắc',
            notification: 'Vịt quay nóng hổi, thơm ngon từng miếng thử ngay nào.',
            new: 'new-notification',
        },
        {
            src: './access/img/header/img-notification/image-6.jpeg',
            name: 'Trà Sữa Pozaa Tea - Nguyễn Tuân',
            notification: 'Chỉ 19k 1 cốc với mọi vị bạn muốn, chỉ duy nhất hôm nay.',
            new: '',
        },
        {
            src: './access/img/header/img-notification/image-7.jpg',
            name: 'Dimsum Điểm Tâm Đài Loan - Nghĩa Đô',
            notification: 'Món mới của nhà hàng đây cả nhà ơi, mọi người thử và đóng góp ý kiến nào.',
            new: '',
        },
    ],

    // loadList Places for form
    loadPlacesList: function() {
        const htmls = this.placesData.map((place,index) => {
            return `<div class="form-places_select-link">
            <p class="places_select-link-name">${place.city}</p>
            <p class="places_select-link-number">${place.number}</p>
        </div>`
        })
        PlacesSeclectData.innerHTML = htmls.join('');
    },


    // Load data notifications
    loadnotifiList: function() {
        const htmls = this.notifiData.map((notifi,index) => {
            return `<li class="form-notifications_item">
            <a href = "#" class="form-notifications_link ${notifi.new}">
            <img src="${notifi.src}" alt="" class="form-notifications_link-img">
            <div class="form-notifications_link-content">
                <h4 class="notifications-content_heading">${notifi.name}</h4>
                <span class="notifications-content_content">${notifi.notification}</span>
            </div>
            </a>
            </li>   `
        })
        NotifiList.innerHTML = htmls.join('');
    },

    handleEvent: function() {
        // show new note
        const noteNew = $('.note-new');
        setInterval( function() {
            noteNew.classList.add('active');
            setTimeout( function() {
                noteNew.classList.remove('active');
            },1000);
        },2000);

        // Xử lý hiện, ẩn form places select
        const formPlaces = $('.form-places');
        let showFormPlaces = false;
        placesSelect.onclick = function() {
            if(showFormPlaces){
                showFormPlaces = false;
                formPlaces.classList.remove('active');
            }else {
                showFormPlaces = true;
                formPlaces.classList.add('active');
            }
        }

        // click vào places
        const NamePlace = $('.category_place-name');
        const NameCityNow = $('.address-label');
        PlacesSeclectData.onclick = function(e) {
            NamePlace.innerText = e.target.children[0].innerText;
            NameCityNow.innerText = e.target.children[0].innerText;
        }

        // Xử lý ẩn, hiện form activities select
        const formActivities = $('.form-activeties');
        let showFormActivities = false;
        ActivitiesSelect.onclick = function() {
            if(showFormActivities) {
                showFormActivities = false;
                formActivities.classList.remove('active');
            }
            else {
                showFormActivities = true;
                formActivities.classList.add('active');
            }
        }

        // form download
        const formDownload = $('.form-download');
        let showFormDownload = false;
        DownloadApp.onclick = function() {
            if(showFormDownload) {
                showFormDownload = false;
                formDownload.classList.remove('active');
            }
            else {
                showFormDownload = true;
                formDownload.classList.add('active');
            }
        }

        // form notifications
        const formNotification = $('.form-notifications');
        let showFormNotificatins = false;
        Notificatons.onclick = function() {
            if(showFormNotificatins) {
                showFormNotificatins = false;
                formNotification.classList.remove('active');
            }
            else {
                showFormNotificatins = true;
                formNotification.classList.add('active');
            }
        }

        // xử lý khi ấn vào thông báo mới
        NotifiList.onclick = function(e) {   
            getParent(e.target,'.new-notification').classList.remove('new-notification');
        }

        // xử lý khi ấn đánh dấu đã xem
        const newNotifis = $$('.form-notifications_link.new-notification');
        const notifiWatched = $('.form-notifications_footer');
        notifiWatched.onclick = function() {
            for(notifi of newNotifis){
                notifi.classList.remove('new-notification');
            }
        }

        // form add element
        const formAddElement = $('.form-add-element');
        let showFormAddElement = false;
        AddElement.onclick = function() {   
            if(showFormAddElement) {
                showFormAddElement = false;
                formAddElement.classList.remove('active');
            }
            else {
                showFormAddElement = true;
                formAddElement.classList.add('active');
            }
        }

        // select languages
        const languagesForm = $('.select-languages');
        let showFormLanguages = false;
        LanguagesSelect.onclick = function() {
            if(showFormLanguages) {
                showFormLanguages = false;
                languagesForm.classList.remove('active');
            }
            else {
                showFormLanguages = true;
                languagesForm.classList.add('active');
            }
        }
        
        let vn = true;
        languagesForm.onclick = function() {
            let LanguageNow = $('.toolBar-languages_img');
            let srcNow = LanguageNow.getAttribute('src');
            let LanguageSelect = $('.select-languages_img');
            let srcSelect = LanguageSelect.getAttribute('src');
            let LanguageSelectName = $('.select-languages_name');
            // đổi languages
            LanguageNow.setAttribute('src',srcSelect);           
            LanguageSelect.setAttribute('src',srcNow);
            if(vn){
                LanguageSelectName.innerText = 'VN';
                vn = false;
            }
            else {
                LanguageSelectName.innerText = 'EN';
                vn = true
            }
        }

        // Hiện menu user
        const FromUser = $('.user-menu_list');
        let showFromUser = false;
        UserBtn.onclick = function() {
            if(showFromUser) {
                FromUser.classList.add('active');
                showFromUser = false;
            } else {
                FromUser.classList.remove('active');
                showFromUser = true;
            }
        }

        // Đăng xuất
        const SignOutBtn = $('.user-menu_item-sign-out');
        const btnAdmin = document.getElementById('admin');
        SignOutBtn.onclick = function() {
            UserBtn.classList.remove('login');
            LoginBtn.classList.add('active');
            BtnRegister.classList.add('active');
            btnAdmin.classList.remove('active');
        }

        // form control admin
        const formControl = $('.control-menu_list');
        let showControl = false;
        btnAdmin.onclick = function() {
            if(showControl) {
                formControl.classList.remove('active');
                showControl = false;
            } else {
                formControl.classList.add('active');
                showControl = true;
            }
        }

        // Hiện form login
        const OverLayLogin = $('.overlay-login');
        const CloseOverLay = $('.form-heading_icon');
        let showOverLay = false;
        LoginBtn.onclick = function() {
            showOverLay = true;
            OverLayLogin.classList.add('active');
        }
        CloseOverLay.onclick =function() {
            showOverLay = false;
            OverLayLogin.classList.remove('active');
        }

        // Đăng nhập
        const LoginAccountFormBtn = $('.form-login_btn');
        const LoginAccountFormBtn2 = $('.form-login_btn-2');
        const InputPhoneNumber = $('.form-login_input');
        const InputPassWord = $('.form-login_input-pass');
        const DescriptionForm = $('.form-main_description');
        const IconBack = $('.form-heading_icon-back');
        const TagInputPhoneNumber = $('#phoneNumber');
        const BtnRegister = $('.toolBar-register');

        LoginAccountFormBtn.onclick = function () {
            if(TagInputPhoneNumber.value != '') {
                InputPhoneNumber.classList.remove('active');
                InputPassWord.classList.add('active');
                IconBack.classList.add('active');
                DescriptionForm.innerText = 'Nhập mật khẩu để đăng nhập';
                LoginAccountFormBtn2.classList.add('active');
                LoginAccountFormBtn.classList.remove('active');
            }
        }

        IconBack.onclick = function() {
            InputPhoneNumber.classList.add('active');
            InputPassWord.classList.remove('active');
            IconBack.classList.remove('active');
            LoginAccountFormBtn.classList.add('active');
            LoginAccountFormBtn2.classList.remove('active');
            DescriptionForm.innerText = 'Nhập số điện thoại để tiếp tục';
        }

        // Quên mật khẩu
        const forgotPassWord = $('.login-input_forget-pass');
        const FormForgotPassWord = $('.overlay-forgotpassword');
        const hiddenFormForgot = $('.form-forgotpass_icon');
        const ForgotPassWordSDT = $('.form-forgotpass_input-sdt');
        forgotPassWord.onclick = function() {
            FormForgotPassWord.classList.add('active');
            ForgotPassWordSDT.value = TagInputPhoneNumber.value;
            alert('Forgot Password');
        }
        hiddenFormForgot.onclick = function() {
            FormForgotPassWord.classList.remove('active');
        }

        // Đổi mật khẩu
        const ChangePassWord = $('.changePassWord-item');
        const FormChangePassWord = $('.overlay-change-password');
        const hiddenFormChangepw = $('.form-change-password_icon');
        const ChangePassWordSDT = $('.form-changepw_input-sdt');
        ChangePassWord.onclick = function() {
            FormChangePassWord.classList.add('active');
            ChangePassWordSDT.value = TagInputPhoneNumber.value;
        }
        hiddenFormChangepw.onclick = function() {
            FormChangePassWord.classList.remove('active');
        }

        // Map-address
        const SelectAddress = $('.header-address');
        FormMap = $('.overlay-address');
        BackBtn = $('.Map-form_footer-content');
        SelectAddress.onclick = function() {
            FormMap.classList.add('active');
        }
        BackBtn.onclick = () => {
            FormMap.classList.remove('active');
        }
        
    },

    start: function() {
        this.loadPlacesList();
        this.loadnotifiList();
        this.handleEvent();
    }
}
header.start();

const store = {
    handleEvent: function() {
        const Q1 = $("#Q1");
		const Q2 = $("#Q2");
		const Q3 = $("#Q3");
		const SP1 = $("#SP1");
		const SP2 = $("#SP2");
		const SP3 = $("#SP3");
		const Quan = $(".KhuVuc_Item");
		const SP = $(".TheChuaSP");	

		Q1.onclick = function() {
			Q1.classList.add('active');
			Q2.classList.remove('active');
			Q3.classList.remove('active');
			SP1.classList.add('active');
			SP2.classList.remove('active');
			SP3.classList.remove('active');
		}
		Q2.onclick = function() {
			Q1.classList.remove('active');
			Q2.classList.add('active');
			Q3.classList.remove('active');
			SP1.classList.remove('active');
			SP2.classList.add('active');
			SP3.classList.remove('active');
		}
		Q3.onclick = function() {
			Q1.classList.remove('active');
			Q2.classList.remove('active');
			Q3.classList.add('active');
			SP1.classList.remove('active');
			SP2.classList.remove('active');
			SP3.classList.add('active');
		}
    },
    start: function() {
        this.handleEvent();
    }
}
store.start();