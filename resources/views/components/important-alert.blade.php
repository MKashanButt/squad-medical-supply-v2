<div class="importantInfo" x-data="{ toggleDisplay: true }" x-show="toggleDisplay">
    <p>Important Information in regard of COVID19</p>
    <div class="infoButtons">
        <button @click="toggleDisplay = false">Close</button>
        <x-a href='/blogs/covid-19'>
            <button @click="toggleDisplay = false">Read</button>
        </x-a>
    </div>
</div>
