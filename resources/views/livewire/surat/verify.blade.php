<div>
  <form wire:submit.prevent="">
      <div class="px-2 py-5 sm:p-6 bg-gray-100 bg-opacity-25">
          <div class="grid grid-cols-12 gap-6">
              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="date_signin" value="Tanggal Masuk" class="font-bold" />
                  <x-jet-input id="date_signin" type="date" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="date_signin" autocomplete="date_signin" />
                  <x-jet-input-error for="date_signin" class="mt-2" />
              </div>

              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="assitant_officer" value="Pejabat Yang Mendamping" class="font-bold" />
                  <x-jet-input id="assitant_officer" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="assitant_officer" autocomplete="assitant_officer" />
                  <x-jet-input-error for="assitant_officer" class="mt-2" />
              </div>

              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="hour" value="Jam" class="font-bold" />
                  <x-jet-input id="hour" type="time" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="hour" autocomplete="hour" />
                  <x-jet-input-error for="hour" class="mt-2" />
              </div>

              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="officer" value="Pejabat" class="font-bold" />
                  <x-jet-input id="officer" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="officer" autocomplete="officer" />
                  <x-jet-input-error for="officer" class="mt-2" />
              </div>

              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="activity" value="Kegiatan" class="font-bold" />
                  <x-jet-input id="activity" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="activity" autocomplete="activity" />
                  <x-jet-input-error for="activity" class="mt-2" />
              </div>

              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="protokol_team" value="Tim Protokol" class="font-bold" />
                  <x-jet-input id="protokol_team" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="protokol_team" autocomplete="protokol_team" />
                  <x-jet-input-error for="protokol_team" class="mt-2" />
              </div>

              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="location" value="Lokasi" class="font-bold" />
                  <x-jet-input id="location" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="location" autocomplete="location" />
                  <x-jet-input-error for="name" class="mt-2" />
              </div>
              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="clothes" value="Pakaian" class="font-bold" />
                  <x-jet-input id="clothes" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="clothes" autocomplete="clothes" />
                  <x-jet-input-error for="clothes" class="mt-2" />
              </div>
              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="odp_invite" value="ODP Yang Mengundang" class="font-bold" />
                  <x-jet-input id="odp_invite" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="odp_invite" autocomplete="odp_invite" />
                  <x-jet-input-error for="odp_invite" class="mt-2" />
              </div>
              <div class="col-span-6 sm:col-span-6">
                  <x-jet-label for="description" value="Keterangan" class="font-bold" />
                  <x-jet-input id="description" type="text" class="mt-1 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-300 focus:border-teal-300 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-300 dark:focus:border-teal-300 dark:shadow-sm-light" wire:model.defer="description" autocomplete="description" />
                  <x-jet-input-error for="description" class="mt-2" />
              </div>
          </div>

          <div class="mt-2 flex items-center justify-end px-4 py-3 text-right sm:px-6 sm:rounded-bl-md sm:rounded-br-md">
              <x-teal-button type="submit">
                  Submit
              </x-teal-button>
          </div>
      </div>

  </form>

</div>