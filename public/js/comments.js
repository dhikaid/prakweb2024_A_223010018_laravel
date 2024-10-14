function replyTo(reply, slug, token, img) {
    var replyBuka = document.querySelector(".brb-" + reply);
    if (!replyBuka.innerHTML) {
        replyBuka.innerHTML = `
            <form method="POST" action="/blogs/${slug}/comment/${reply}">
            <input type="hidden" name="_token" value="${token}" autocomplete="off">    <label for="chat" class="sr-only">Your message</label>
    <div class="my-4 ms-4 flex items-center px-3 py-2 rounded-lg bg-slate-50 dark:bg-zinc-700">
    <img class="mr-2 w-6 h-6 rounded-full" src="${img}">
        <textarea id="chatReply" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..." name="comment" required autofocus></textarea>
        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
        <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
            <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
        </svg>
        <span class="sr-only">Send message</span>
    </button>
    </div>
</form>`;
        document.querySelector("#chatReply").focus();
    } else {
        replyBuka.innerHTML = "";
    }
}

function replyToTimeline(reply, slug, token, img) {
    var replyBuka = document.querySelector(".brb-" + reply);
    if (!replyBuka.innerHTML) {
        replyBuka.innerHTML = `
            <form method="POST" action="/timeline/${slug}/comment/${reply}">
            <input type="hidden" name="_token" value="${token}" autocomplete="off">    <label for="chat" class="sr-only">Your message</label>
    <div class="my-4 ms-4 flex items-center px-3 py-2 rounded-lg bg-slate-50 dark:bg-zinc-800">
    <img class="mr-2 w-6 h-6 rounded-full" src="${img}">
        <textarea id="chatReply" rows="1" class="block mx-4 p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..." name="comment" required autofocus></textarea>
        <button type="submit" class="inline-flex justify-center p-2 text-blue-600 rounded-full cursor-pointer hover:bg-blue-100 dark:text-blue-500 dark:hover:bg-gray-600">
        <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
            <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
        </svg>
        <span class="sr-only">Send message</span>
    </button>
    </div>
</form>`;
        document.querySelector("#chatReply").focus();
    } else {
        replyBuka.innerHTML = "";
    }
}
