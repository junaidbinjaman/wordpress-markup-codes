import {useForm} from 'react-hook-form';
import type {SubmitHandler} from 'react-hook-form'

type Inputs = {
    first_name: string
    last_name: string
}

function Form() {
    const {register, handleSubmit, watch, formState: {errors}} = useForm<Inputs>({
        defaultValues: {
            first_name: 'Junaid Bin',
            last_name: 'Jaman'
        }
    });

    const onSubmit: SubmitHandler<Inputs> = (data: Inputs): void => {
        console.log(data);
    }

    console.log(watch('first_name'));
    return (
        <form onSubmit={handleSubmit(onSubmit)}
              className='flex flex-col w-[500px] bg-gray-800 rounded p-5 gap-10 ml-10'>
            <input
                className='border-2 border-gray-400 text-white rounded placeholder:text-gray-400 placeholder:pl-2' {...register('first_name', {required: true})}
                placeholder='John..'/>
            {errors.first_name && <span className='text-lg text-white'>{errors.first_name.message}sadasd</span>}

            <input
                className='border-2 border-gray-400 text-white rounded placeholder:text-gray-400 placeholder:pl-2' {...register('last_name')}
                placeholder='Smith..'/>
            <input className='bg-gray-400 py-3 rounded cursor-pointer' type='submit'/>
        </form>
    )
}

export default Form;