import {useForm} from "react-hook-form";
import type {SubmitHandler} from "react-hook-form";

declare global {
    interface Window {
        wp_data: {
            rest_root: string,
            nonce: string
        }
    }
}

type InputTypes = {
    postTitle: string;
    postContent: string;
}

function Posts () {
    const {register, handleSubmit} = useForm<InputTypes>();

    const onSubmit: SubmitHandler<InputTypes> = async (data: InputTypes): Promise<void> => {
        const url = new URL('wp/v2/posts', window.wp_data.rest_root);

        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-WP-Nonce': window.wp_data.nonce
                },
                body: JSON.stringify({
                    title: data.postTitle,
                    content: data.postContent,
                    status: 'publish'
                })
            })

            if (!response.ok) {
                throw new Error();
            }

            const resData = await response.json();
            console.log(resData);

        } catch (errors) {
            console.log(errors);
        }
    }

    return (<>
        <form onSubmit={handleSubmit(onSubmit)}>
            <div>
                <label htmlFor="postTitle" className="block text-sm/6 font-medium text-gray-900">Post Title</label>
                <div className="mt-2">
                    <div
                        className="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                        <input id="postTitle" type="text" {...register('postTitle', {required: true})}
                               className="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"/>
                    </div>
                </div>
            </div>

            <div>
                <label htmlFor="postContent" className="block text-sm/6 font-medium text-gray-900">Post Title</label>
                <div className="mt-2">
                    <div
                        className="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 has-[input:focus-within]:outline-2 has-[input:focus-within]:-outline-offset-2 has-[input:focus-within]:outline-indigo-600">
                        <textarea id="postContent" {...register('postContent')}
                                  className="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"></textarea>
                    </div>
                </div>
            </div>

            <button type='submit' className='bg-slate-800 px-5 py-3 rounded text-white mt-5 cursor-pointer'>Publish</button>
        </form>
    </>)
}

export default Posts;
