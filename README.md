Abeona

- Contact form data
- Booking form data
- Price table and property in car that will be calculated by the buissnes rules
- Google captha
- Deploy to server
- Find email service
- Check pricing of google maps
- Dva jezika eng i mne


Add full path to env `APP_IMAGE_PATH=http://127.0.0.1:8000/storage/` add domain name instead of local host mb?

TODO:
- [ ] Make an object "$car_filter" from dashboard 
- [ ] Booking
    - [x] List
    - [X] Create
- [x] Contacts
    - [x] Get data from view
    - [x] Store to db
    - [x] Create event
    - [x] Send text email
    - [] Mailgun add domain certs
    - [] Connect to mailgun
- [x] Find Cars endpoint
- [] Refactor car find endpoint
- [] Extract prices functions to Price model or something

- [x] Car 
    - [x] Images table
    - [x] Prices table
        has Season and prices: default, 1-3, 4-7, 8-15, 16-22, 23 +
- [x] Image storage
- [x] Car seeder works?
- [x] Add missing fields
- [x] Store Car
    What car request object should contain?
        - car object
        - array of image objects
        - array of price objects

- [] Edit Car
- [] Delete Car

- [] Bookings
