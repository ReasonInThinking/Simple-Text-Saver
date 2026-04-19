# Simple Note Saver

A basic PHP tool to save and update a single text note. It doesn't create a long list of messages—it just remembers and updates one single piece of text.

<img width="1421" height="371" alt="save text" src="https://github.com/user-attachments/assets/1e5b0f0f-221e-4742-aee3-bf1c0cae21d9" />

### How it works:
* **One Screen**: Just a text area and a button. Simple.
* **Smart Saving**: It always updates the same note instead of making new ones.
* **Safe & Clean**: Your text is handled safely so it won't break the page.
* **No Refresh Bugs**: You won't get those annoying "Confirm Form Resubmission" pop-ups.

### How to set up:
1. Create a database named `reload`.
2. Create a table named `text` with an `id` and a `message` column.
3. Drop the files into your local server folder (like `htdocs`) and you are ready to go!
