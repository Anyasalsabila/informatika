<x-layout>
    <section class="w-full md:w-11/12 lg:w-10/12 mx-auto px-4">
        <div class="mt-24 py-12 px-8 bg-blue-50 rounded-xl">
            <h1 class="text-3xl font-bold">Mata Kuliah Teknik Informatika</h1>
            <p class="text-slate-600 mt-2">Mata Kuliah di Jurusan Teknik Informatika</p>
        </div>
        <div class="py-12 w-full flex flex-col md:flex-row gap-8">
            <div class="flex flex-col w-full">
                <div class="-m-1.5 overflow-x-auto w-full">
                    <div class="p-4 rounded-xl w-full min-w-full inline-block align-middle border">
                        <div class="overflow-hidden w-full">
                            <table class="w-full min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                                <caption class="py-2 text-start text-sm text-gray-600 dark:text-neutral-500">Daftar Mata Kuliah</caption>
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Kode</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Mata Kuliah</th>
                                        <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">SKS</th>
                                        <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Semester</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                    @foreach ($curriculums as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $item->code }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $item->name }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $item->sks }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                            {{ $item->semester }}
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
