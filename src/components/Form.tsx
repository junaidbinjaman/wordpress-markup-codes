
type FormPros = {
    submitHandler: () => void;
    firstName: any;
    lastName: any;
}
function Form({submitHandler, firstName, lastName}: FormPros) {
    return <>
        <div className='w-3/4 flex items-center shadow-sm bg-white p-5 rounded-sm'>
            <form onSubmit={(e) => submitHandler(e)}>
                <div className="space-y-12">
                    <div className="border-b border-gray-900/10 pb-12">
                        <h2 className="text-base/7 font-semibold text-gray-900">Profile</h2>
                        <p className="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be
                            careful what you share.</p>

                    </div>

                    <div className="border-b border-gray-900/10 pb-12">
                        <h2 className="text-base/7 font-semibold text-gray-900">Personal Information</h2>
                        <p className="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive
                            mail.</p>

                        <div className="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div className="sm:col-span-3">
                                <label htmlFor="first-name" className="block text-sm/6 font-medium text-gray-900">First
                                    name</label>
                                <div className="mt-2">
                                    <input type="text" onChange={(e) => firstName(e.target.value)} name="first-name" id="first-name" autoComplete="given-name"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>

                            <div className="sm:col-span-3">
                                <label htmlFor="last-name" className="block text-sm/6 font-medium text-gray-900">Last
                                    name</label>
                                <div className="mt-2">
                                    <input type="text" name="last-name" onChange={(e) => lastName(e.target.value)} id="last-name" autoComplete="family-name"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>

                            <div className="sm:col-span-4">
                                <label htmlFor="email" className="block text-sm/6 font-medium text-gray-900">Email
                                    address</label>
                                <div className="mt-2">
                                    <input id="email" name="email" type="email" autoComplete="email"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>

                            <div className="sm:col-span-3">
                                <label htmlFor="country"
                                       className="block text-sm/6 font-medium text-gray-900">Country</label>
                                <div className="mt-2 grid grid-cols-1">
                                    <select id="country" name="country" autoComplete="country-name"
                                            className="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pr-8 pl-3 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                        <option>United States</option>
                                        <option>Canada</option>
                                        <option>Mexico</option>
                                    </select>
                                    <svg
                                        className="pointer-events-none col-start-1 row-start-1 mr-2 size-5 self-center justify-self-end text-gray-500 sm:size-4"
                                        viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                              d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                            </div>

                            <div className="col-span-full">
                                <label htmlFor="street-address" className="block text-sm/6 font-medium text-gray-900">Street
                                    address</label>
                                <div className="mt-2">
                                    <input type="text" name="street-address" id="street-address"
                                           autoComplete="street-address"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>

                            <div className="sm:col-span-2 sm:col-start-1">
                                <label htmlFor="city" className="block text-sm/6 font-medium text-gray-900">City</label>
                                <div className="mt-2">
                                    <input type="text" name="city" id="city" autoComplete="address-level2"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>

                            <div className="sm:col-span-2">
                                <label htmlFor="region" className="block text-sm/6 font-medium text-gray-900">State /
                                    Province</label>
                                <div className="mt-2">
                                    <input type="text" name="region" id="region" autoComplete="address-level1"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>

                            <div className="sm:col-span-2">
                                <label htmlFor="postal-code" className="block text-sm/6 font-medium text-gray-900">ZIP /
                                    Postal code</label>
                                <div className="mt-2">
                                    <input type="text" name="postal-code" id="postal-code" autoComplete="postal-code"
                                           className="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"/>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div className="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" className="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <button type="submit"
                            className="rounded-md !bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit
                    </button>
                </div>
            </form>
        </div>
    </>
}

export default Form;