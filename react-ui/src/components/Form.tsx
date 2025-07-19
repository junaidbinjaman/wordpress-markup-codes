import {Button} from "@/components/ui/button.tsx";
import {Input} from "@/components/ui/input.tsx";
import {Textarea} from "@/components/ui/textarea.tsx";
import {useForm} from "react-hook-form";
import type {SubmitHandler} from "react-hook-form";
import {useEffect, useState} from "react";

declare global {
    interface Window {
        wpData: {
            restRoot: string;
            nonce: string
        }
    }

}

type FormProps = {
    title: string;
}

type InputTypes = {
    postTitle: string;
    postContent: string;
}

function Form({title}: FormProps) {
    const [postData, setPostData] = useState({
        postTitle: '',
        postContent: ''
    });

    const {register, handleSubmit, watch, formState: {errors}} = useForm<InputTypes>({
        defaultValues: {
            postTitle: postData.postTitle,
            postContent: postData.postContent
        }
    });

    const onSubmit: SubmitHandler<InputTypes> = async (data: InputTypes) => {

            const url = new URL('wp/v2/posts', window.wpData.restRoot)

            try {
                const response = await fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-WP-Nonce': window.wpData.nonce
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

            } catch (error) {
                console.log(error);
            }


        setPostData({postTitle: '', postContent: ''});
    }

    useEffect(() => {
        setPostData({postTitle: watch('postTitle'), postContent: watch('postContent')});
    }, [watch('postTitle'), watch('postContent')]);


    return (
        <>
            <h3 className='!text-3xl text-slate-800 border-slate-400 rounded py-3'>{title}</h3>
            <form onSubmit={handleSubmit(onSubmit)} className='shadow p-6 rounded mt-5'>
                <div className='mb-5'>
                    <label htmlFor='post-title' className='!text-[18px]'>Post Title</label>
                    <Input
                        {...register('postTitle', {required: 'Tis field is required'})}
                        value={postData.postTitle}
                        id='post-title'
                        placeholder='Post title'
                        type='text'
                    />
                    <p className='text-[12px] text-red-600 italic'>{errors.postTitle?.message}</p>
                </div>
                <div>
                    <label htmlFor='post-content' className='!text-[18px]'>Post Content</label>
                    <Textarea
                        {...register('postContent', {required: 'Post content is required'})}
                        value={postData.postContent}
                        id='post-content'
                        placeholder='Your post content..'
                    >
                    </Textarea>
                    <p className='text-[12px] text-red-600 italic'>{errors.postContent?.message}</p>
                </div>
                <Button
                    className='mt-5 cursor-pointer text-lg px-10 py-6 active:scale-75 bg-slate-800 hover:bg-slate-700'>Publish</Button>
            </form>
        </>
    )
}

export default Form
